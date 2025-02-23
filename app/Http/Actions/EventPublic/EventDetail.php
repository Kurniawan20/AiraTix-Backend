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

        // Get tickets with prices
        $tickets = DB::table('tickets')
            ->where('tickets.event_id', '=', $id)
            ->whereNull('tickets.deleted_at')
            ->select(
                'tickets.id',
                'tickets.title',
                'tickets.description',
                'tickets.sale_start_date',
                'tickets.sale_end_date',
                'tickets.max_per_order',
                'tickets.min_per_order',
                DB::raw('(
                    SELECT json_agg(
                        json_build_object(
                            \'id\', tp.id,
                            \'price\', tp.price,
                            \'initial_quantity_available\', tp.initial_quantity_available,
                            \'quantity_sold\', tp.quantity_sold,
                            \'label\', tp.label,
                            \'description\', tickets.description
                        )
                    )
                    FROM ticket_prices tp
                    WHERE tp.ticket_id = tickets.id
                ) as prices'),
                DB::raw('(
                    SELECT json_agg(
                        json_build_object(
                            \'id\', tf.id,
                            \'name\', tf.name,
                            \'description\', tf.description,
                            \'calculation_type\', tf.calculation_type,
                            \'rate\', tf.rate,
                            \'type\', tf.type
                        )
                    )
                    FROM ticket_taxes_and_fees ttf
                    JOIN taxes_and_fees tf ON tf.id = ttf.tax_and_fee_id
                    WHERE ttf.ticket_id = tickets.id
                ) as taxes_and_fees')
            )
            ->get()
            ->map(function ($ticket) {
                // Decode JSON strings
                $ticket->prices = json_decode($ticket->prices) ?? [];
                $ticket->taxes_and_fees = json_decode($ticket->taxes_and_fees) ?? [];
                
                // Remove duplicates from taxes_and_fees based on id
                $uniqueTaxes = [];
                $seenIds = [];
                foreach ($ticket->taxes_and_fees as $tax) {
                    if (!isset($seenIds[$tax->id])) {
                        $uniqueTaxes[] = $tax;
                        $seenIds[$tax->id] = true;
                    }
                }
                $ticket->taxes_and_fees = $uniqueTaxes;
                
                // Calculate price after tax for each price
                foreach ($ticket->prices as $price) {
                    $basePrice = (float) $price->price;
                    $priceAfterTax = $basePrice;
                    $appliedTaxes = [];

                    foreach ($ticket->taxes_and_fees as $tax) {
                        $rate = (float) $tax->rate;
                        $amount = 0;
                        
                        if ($tax->calculation_type === 'PERCENTAGE') {
                            $amount = $basePrice * $rate / 100;
                        } else if ($tax->calculation_type === 'FIXED') {
                            $amount = $rate;
                        }
                        
                        // Add tax details to applied taxes
                        $appliedTaxes[] = [
                            'id' => $tax->id,
                            'name' => $tax->name,
                            'description' => $tax->description,
                            'type' => $tax->type,
                            'calculation_type' => $tax->calculation_type,
                            'rate' => $tax->rate,
                            'formatted_rate' => $tax->calculation_type === 'PERCENTAGE' ? 
                                number_format($tax->rate, 3) . '%' : 
                                'Rp ' . number_format($tax->rate, 0, ',', '.'),
                            'amount' => $amount
                        ];

                        $priceAfterTax += $amount;
                    }

                    $price->price_after_tax = $priceAfterTax;
                    $price->applied_taxes = $appliedTaxes;
                    $price->formatted_price = "Rp " . number_format($price->price, 0, ',', '.');
                    $price->formatted_price_after_tax = "Rp " . number_format($price->price_after_tax, 0, ',', '.');
                    // Keep both label and description
                    $price->tier_description = $price->label ?? null;
                }

                // Calculate min and max prices for the ticket
                $prices = collect($ticket->prices);
                $ticket->min_price = $prices->min('price');
                $ticket->max_price = $prices->max('price');
                $ticket->min_price_after_tax = $prices->min('price_after_tax');
                $ticket->max_price_after_tax = $prices->max('price_after_tax');
                
                // Add formatted versions
                $ticket->formatted_min_price = "Rp " . number_format($ticket->min_price, 0, ',', '.');
                $ticket->formatted_max_price = "Rp " . number_format($ticket->max_price, 0, ',', '.');
                $ticket->formatted_min_price_after_tax = "Rp " . number_format($ticket->min_price_after_tax, 0, ',', '.');
                $ticket->formatted_max_price_after_tax = "Rp " . number_format($ticket->max_price_after_tax, 0, ',', '.');
                
                // Add price range text
                $ticket->price_range = $ticket->min_price === $ticket->max_price 
                    ? $ticket->formatted_min_price 
                    : "{$ticket->formatted_min_price} - {$ticket->formatted_max_price}";
                    
                $ticket->price_range_after_tax = $ticket->min_price_after_tax === $ticket->max_price_after_tax
                    ? $ticket->formatted_min_price_after_tax
                    : "{$ticket->formatted_min_price_after_tax} - {$ticket->formatted_max_price_after_tax}";

                return $ticket;
            });

        $event->tags = !empty($event->tags) ? json_decode($event->tags) : [];
        $event->social_media_handles = !empty($event->social_media_handles) ? json_decode($event->social_media_handles) : [];

        if (is_string($event->location_details)) {
            $event->location_details = json_decode($event->location_details);
        }

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

        // Calculate event-wide price ranges
        $allPrices = collect();
        $allPricesAfterTax = collect();
        
        foreach ($tickets as $ticket) {
            foreach ($ticket->prices as $price) {
                $allPrices->push($price->price);
                $allPricesAfterTax->push($price->price_after_tax);
            }
        }

        $event->min_price = $allPrices->min();
        $event->max_price = $allPrices->max();
        $event->min_price_after_tax = $allPricesAfterTax->min();
        $event->max_price_after_tax = $allPricesAfterTax->max();
        
        $event->formatted_min_price = "Rp " . number_format($event->min_price, 0, ',', '.');
        $event->formatted_max_price = "Rp " . number_format($event->max_price, 0, ',', '.');
        $event->formatted_min_price_after_tax = "Rp " . number_format($event->min_price_after_tax, 0, ',', '.');
        $event->formatted_max_price_after_tax = "Rp " . number_format($event->max_price_after_tax, 0, ',', '.');
        
        $event->price_range = $event->min_price === $event->max_price 
            ? $event->formatted_min_price 
            : "{$event->formatted_min_price} - {$event->formatted_max_price}";
            
        $event->price_range_after_tax = $event->min_price_after_tax === $event->max_price_after_tax
            ? $event->formatted_min_price_after_tax
            : "{$event->formatted_min_price_after_tax} - {$event->formatted_max_price_after_tax}";

        return [
            'event' => $event,
            'settings' => $settings,
            'tickets' => $tickets
        ];
    }
}
