<?php

namespace HiEvents\Http\Actions\EventPublic;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class EventTop extends Controller
{
    public function __invoke(Request $request)
    {
        $today = now();

        $events = DB::table('orders')
            ->join('events', 'orders.event_id', '=', 'events.id')
            ->leftJoin('event_settings', 'orders.event_id', '=', 'event_settings.event_id')
            ->leftJoin('organizers', 'events.organizer_id', '=', 'organizers.id')
            ->leftJoin('images', function ($join) {
                $join->on('events.id', '=', 'images.entity_id')
                    ->where('images.type', '=', 'EVENT_COVER')
                    ->whereNull('images.deleted_at');
            })
            ->select(
                'events.*',
                DB::raw("event_settings.location_details->>'city' as city"),
                DB::raw("event_settings.location_details->>'country' as country"),
                DB::raw("event_settings.location_details->>'venue_name' as venue_name"),
                DB::raw("event_settings.location_details->>'address_line_1' as address_line_1"),
                DB::raw("event_settings.location_details->>'address_line_2' as address_line_2"),
                DB::raw("event_settings.location_details->>'state_or_region' as state_or_region"),
                DB::raw("event_settings.location_details->>'zip_or_postal_code' as zip_or_postal_code"),
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
                DB::raw('SUM(orders.total_gross) as total_sales'),
                DB::raw('(
                    SELECT MIN(tp.price::INTEGER)
                    FROM tickets t
                    JOIN ticket_prices tp ON t.id = tp.ticket_id
                    WHERE t.event_id = events.id
                    AND t.deleted_at IS NULL
                ) as price')
            )
            ->where('events.status', '=', 'LIVE')
            ->where('events.start_date', '<=', $today) // Acara sudah dimulai
            ->where('events.end_date', '>=', $today)   // Acara belum berakhir
            ->groupBy(
                'events.id',
                'event_settings.is_online_event',
                'city',
                'country',
                'venue_name',
                'address_line_1',
                'address_line_2',
                'state_or_region',
                'zip_or_postal_code',
                'organizers.name',
                'organizers.phone',
                'organizers.email'
            )
            ->orderBy('total_sales', 'desc')
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
            
            return $event;
        });

        return response()->json([
            'events' => $events,
            'total' => $events->count()
        ]);
    }
}
