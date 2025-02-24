<?php

namespace HiEvents\Http\Actions\EventPublic;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class EventPast extends Controller
{
    public function __invoke(Request $request)
    {
        $today = now();

        $events = DB::table('events')
            ->leftJoin('event_settings', 'events.id', '=', 'event_settings.event_id')
            ->leftJoin('organizers', 'events.organizer_id', '=', 'organizers.id')
            ->leftJoin('images', function ($join) {
                $join->on('events.id', '=', 'images.entity_id')
                    ->where('images.type', '=', 'EVENT_COVER')
                    ->whereNull('images.deleted_at');
            })
            ->select(
                'events.*',
                DB::raw("CASE 
                    WHEN event_settings.location_details IS NULL THEN NULL
                    ELSE json_build_object(
                        'city', event_settings.location_details->>'city',
                        'country', event_settings.location_details->>'country',
                        'venue_name', event_settings.location_details->>'venue_name',
                        'address_line_1', event_settings.location_details->>'address_line_1',
                        'address_line_2', event_settings.location_details->>'address_line_2',
                        'state_or_region', event_settings.location_details->>'state_or_region',
                        'zip_or_postal_code', event_settings.location_details->>'zip_or_postal_code'
                    )::text
                END as location_details"),
                'event_settings.is_online_event',
                DB::raw('(
                    SELECT path
                    FROM images
                    WHERE images.entity_id = events.id
                    AND images.deleted_at IS NULL
                    AND images.type = \'EVENT_COVER\'
                    LIMIT 1
                ) as image'),
                'organizers.name as organizer_name',
                'organizers.phone as organizer_phone',
                'organizers.email as organizer_email',
                DB::raw("CONCAT('/events/', events.id) as link"),
                DB::raw('(
                    SELECT json_agg(
                        json_build_object(
                            \'id\', t.id,
                            \'title\', t.title,
                            \'description\', t.description,
                            \'prices\', (
                                SELECT json_agg(
                                    json_build_object(
                                        \'id\', tp.id,
                                        \'price\', tp.price,
                                        \'label\', tp.label,
                                        \'quantity_available\', tp.quantity_available,
                                        \'quantity_sold\', tp.quantity_sold
                                    )
                                )
                                FROM ticket_prices tp
                                WHERE tp.ticket_id = t.id
                            )
                        )
                    )::text
                    FROM tickets t
                    WHERE t.event_id = events.id
                    AND t.deleted_at IS NULL
                ) as tickets_json'),
                DB::raw('(
                    SELECT MIN(tp.price::INTEGER)
                    FROM tickets t
                    JOIN ticket_prices tp ON t.id = tp.ticket_id
                    WHERE t.event_id = events.id
                    AND t.deleted_at IS NULL
                ) as price')
            )
            ->where('events.end_date', '<', $today)  // Event sudah berakhir
            ->where('events.status', '=', 'LIVE')
            ->groupBy(
                'events.id',
                'event_settings.is_online_event',
                'event_settings.location_details',
                'organizers.name',
                'organizers.phone',
                'organizers.email'
            )
            ->orderBy('events.end_date', 'desc')  // Urutkan dari yang paling baru berakhir
            ->take(8)
            ->get();

        // Transform and calculate prices
        $events = $events->map(function ($event) {
            // Convert tickets from JSON string to array
            $event->tickets = json_decode($event->tickets_json) ?? [];
            unset($event->tickets_json);

            // Calculate min and max prices
            $prices = collect();
            foreach ($event->tickets as $ticket) {
                if (isset($ticket->prices)) {
                    foreach ($ticket->prices as $price) {
                        $prices->push($price->price);
                    }
                }
            }

            $event->min_price = $prices->min();
            $event->max_price = $prices->max();
            
            // Ensure price field exists for backward compatibility
            if (!isset($event->price)) {
                $event->price = $event->min_price;
            }

            // Parse location_details if it's a string
            if (is_string($event->location_details)) {
                $event->location_details = json_decode($event->location_details);
            }

            return $event;
        });

        return response()->json([
            'events' => $events,
            'total' => $events->count()
        ]);
    }
}
