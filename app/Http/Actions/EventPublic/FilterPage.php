<?php

namespace HiEvents\Http\Actions\EventPublic;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class FilterPage extends Controller
{
    public function __invoke(Request $request)
    {
        $events = DB::table('events')
            ->leftJoin('event_settings', 'events.id', '=', 'event_settings.event_id')
            ->leftJoin('tickets', 'events.id', '=', 'tickets.event_id')
            ->leftJoin('ticket_prices', 'tickets.id', '=', 'ticket_prices.ticket_id')
            ->leftJoin('images', function ($join) {
                $join->on('events.id', '=', 'images.entity_id')
                    ->where('images.type', '=', 'EVENT_COVER')
                    ->whereNull('images.deleted_at');
            })
            ->leftJoin('organizers', 'events.organizer_id', '=', 'organizers.id')
            ->select(
                'events.*',
                'event_settings.location_details',
                'event_settings.is_online_event',
                DB::raw('MIN(ticket_prices.price::INTEGER) as price'),
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
            ->where('events.status', '=', 'LIVE')
            ->groupBy('events.id', 'event_settings.location_details', 'event_settings.is_online_event', 'image', 'organizers.name', 'organizers.phone', 'organizers.email')
            ->orderBy('events.start_date', 'asc')
            ->paginate(10);

        return response()->json($events);
    }
}
