<?php

namespace HiEvents\Http\Actions\EventPublic;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class EventDetail extends Controller
{
    public function __invoke($id)
    {
        $event = DB::table('events')
            ->leftJoin('event_settings', 'events.id', '=', 'event_settings.event_id')
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
                'event_settings.order_timeout_in_minutes',
                'event_settings.pre_checkout_message',
                'event_settings.post_checkout_message',
                'event_settings.ticket_page_message',
                'event_settings.continue_button_text',
                'event_settings.email_footer_message',
                'event_settings.support_email',
                'event_settings.website_url',
                'event_settings.maps_url',
                'event_settings.homepage_background_color',
                'event_settings.homepage_primary_color',
                'event_settings.homepage_primary_text_color',
                'event_settings.homepage_secondary_color',
                'event_settings.homepage_secondary_text_color',
                'event_settings.homepage_background_type',
                'event_settings.seo_title',
                'event_settings.seo_description',
                'event_settings.seo_keywords',
                'event_settings.social_media_handles',
                'event_settings.show_social_media_handles',
                'event_settings.allow_search_engine_indexing',
                'event_settings.notify_organizer_of_new_orders',
                'event_settings.price_display_mode',
                'event_settings.hide_getting_started_page',
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
            ->where('events.id', '=', $id)
            ->first();

        if (!$event || $event->status != 'LIVE') {
            abort(404, 'Event not found');
        }

        $tickets = DB::table('tickets')
            ->leftJoin('ticket_prices', 'tickets.id', '=', 'ticket_prices.ticket_id')
            ->leftJoin('ticket_taxes_and_fees', 'tickets.id', '=', 'ticket_taxes_and_fees.ticket_id')
            ->leftJoin('taxes_and_fees', 'ticket_taxes_and_fees.tax_and_fee_id', '=', 'taxes_and_fees.id')
            ->where('tickets.event_id', '=', $id)
            ->select(
                'tickets.id',
                'tickets.title',
                'tickets.description',
                'tickets.sale_start_date',
                'tickets.sale_end_date',
                'tickets.max_per_order',
                'tickets.min_per_order',
                'ticket_prices.id as ticket_prices_id',
                'ticket_prices.price',
                'ticket_prices.initial_quantity_available',
                'ticket_prices.quantity_sold',
                'taxes_and_fees.name as tax_name',
                'taxes_and_fees.calculation_type as tax_type',
                'taxes_and_fees.rate as tax_rate'
            )
            ->get()
            ->map(function ($ticket) {
                $price = (float) $ticket->price;
                $tax_rate = (float) $ticket->tax_rate;

                if ($ticket->tax_type === 'PERCENTAGE') {
                    $ticket->price_after_tax = $price + ($price * $tax_rate / 100);
                } elseif ($ticket->tax_type === 'FIXED') {
                    $ticket->price_after_tax = $price + $tax_rate;
                } else {
                    $ticket->price_after_tax = $price;
                }

                return $ticket;
            });

        $event->tags = !empty($event->tags) ? json_decode($event->tags) : [];
        $event->location_details = !empty($event->location_details) ? json_decode($event->location_details) : [];
        $event->social_media_handles = !empty($event->social_media_handles) ? json_decode($event->social_media_handles) : [];

        // Extract settings into a separate object
        $settings = (object) [
            'pre_checkout_message' => $event->pre_checkout_message,
            'post_checkout_message' => $event->post_checkout_message,
            'ticket_page_message' => $event->ticket_page_message,
            'continue_button_text' => $event->continue_button_text,
            'email_footer_message' => $event->email_footer_message,
            'support_email' => $event->support_email,
            'order_timeout_in_minutes' => $event->order_timeout_in_minutes,
            'website_url' => $event->website_url,
            'maps_url' => $event->maps_url,
            'homepage_background_color' => $event->homepage_background_color,
            'homepage_primary_color' => $event->homepage_primary_color,
            'homepage_primary_text_color' => $event->homepage_primary_text_color,
            'homepage_secondary_color' => $event->homepage_secondary_color,
            'homepage_secondary_text_color' => $event->homepage_secondary_text_color,
            'homepage_background_type' => $event->homepage_background_type,
            'location_details' => $event->location_details,
            'is_online_event' => $event->is_online_event,
            'seo_title' => $event->seo_title,
            'seo_description' => $event->seo_description,
            'seo_keywords' => $event->seo_keywords,
            'social_media_handles' => $event->social_media_handles,
            'show_social_media_handles' => $event->show_social_media_handles,
            'allow_search_engine_indexing' => $event->allow_search_engine_indexing,
            'notify_organizer_of_new_orders' => $event->notify_organizer_of_new_orders,
            'price_display_mode' => $event->price_display_mode,
            'hide_getting_started_page' => $event->hide_getting_started_page,
        ];

        // Remove settings properties from event object
        foreach (array_keys((array) $settings) as $key) {
            unset($event->$key);
        }

        return [
            'event' => $event,
            'settings' => $settings,
            'tickets' => $tickets
        ];
    }
}
