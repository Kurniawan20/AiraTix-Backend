<?php

namespace HiEvents\Http\Actions\EventPublic;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class EventTop extends Controller
{
    public function __invoke(Request $request)
    {
        $topEvent = DB::table('orders')
            ->join('events', 'orders.event_id', '=', 'events.id')
            ->leftJoin('event_settings', 'orders.event_id', '=', 'event_settings.event_id')
            ->leftJoin('tickets', 'events.id', '=', 'tickets.event_id')
            ->leftJoin('ticket_prices', 'tickets.id', '=', 'ticket_prices.ticket_id')
            ->leftJoin('images', function ($join) {
                $join->on('events.id', '=', 'images.entity_id')
                    ->where('images.type', '=', 'EVENT_COVER')
                    ->whereNull('images.deleted_at');
            })
            ->leftJoin('organizers', 'events.organizer_id', '=', 'organizers.id')
            ->select(
                'events.id',
                'events.title',
                'events.description',
                'events.start_date',
                'events.end_date',
                'events.status',
                DB::raw('ticket_prices.price::INTEGER as price'),
                'event_settings.location_details',
                DB::raw("event_settings.location_details->>'city' as city"),
                DB::raw("event_settings.location_details->>'vanue_name' as vanue"),
                DB::raw("event_settings.location_details->>'state_or_region' as region"),
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
                DB::raw("CONCAT('/events/', events.id) as link")
            )
            ->groupBy(
                'events.id',
                'events.title',
                'events.description',
                'events.start_date',
                'events.end_date',
                'event_settings.location_details',
                'event_settings.is_online_event',
                'organizers.name',
                'organizers.phone',
                'organizers.email',
                'ticket_prices.price'
            )
            ->orderBy(DB::raw('SUM(orders.total_gross)'), 'desc')
            ->take(8)
            ->get();

        return response()->json($topEvent);
    }
}
