<?php

namespace HiEvents\Resources\Event;

use HiEvents\DomainObjects\EventSettingDomainObject;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin EventSettingDomainObject
 */
class EventSettingsResourcePublic extends JsonResource
{
    public function __construct(
        mixed                 $resource,
        private readonly bool $includePostCheckoutData = false,
    )
    {
        parent::__construct($resource);
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->getId(),
            'event_id' => $this->getEventId(),
            'pre_checkout_message' => $this->getPreCheckoutMessage(),

            $this->mergeWhen($this->includePostCheckoutData, [
                'post_checkout_message' => $this->getPostCheckoutMessage(),
                'online_event_connection_details' => $this->getOnlineEventConnectionDetails(),
            ]),

            'ticket_page_message' => $this->getTicketPageMessage(),
            'continue_button_text' => $this->getContinueButtonText(),
            'required_attendee_details' => $this->getRequireAttendeeDetails(),
            'email_footer_message' => $this->getEmailFooterMessage(),
            'support_email' => $this->getSupportEmail(),
            'order_timeout_in_minutes' => $this->getOrderTimeoutInMinutes(),

            // Homepage styling
            'homepage_body_background_color' => $this->getHomepageBodyBackgroundColor(),
            'homepage_background_color' => $this->getHomepageBackgroundColor(),
            'homepage_primary_color' => $this->getHomepagePrimaryColor(),
            'homepage_primary_text_color' => $this->getHomepagePrimaryTextColor(),
            'homepage_secondary_color' => $this->getHomepageSecondaryColor(),
            'homepage_secondary_text_color' => $this->getHomepageSecondaryTextColor(),
            'homepage_background_type' => $this->getHomepageBackgroundType(),

            // URLs
            'website_url' => $this->getWebsiteUrl(),
            'maps_url' => $this->getMapsUrl(),

            // Location
            'location_details' => $this->getLocationDetails(),
            'is_online_event' => $this->getIsOnlineEvent(),
            'address_string' => $this->getAddressString(),

            // SEO and Social
            'allow_search_engine_indexing' => $this->getAllowSearchEngineIndexing(),
            'seo_title' => $this->getSeoTitle(),
            'seo_description' => $this->getSeoDescription(),
            'seo_keywords' => $this->getSeoKeywords(),
            'social_media_handles' => $this->getSocialMediaHandles(),
            'show_social_media_handles' => $this->getShowSocialMediaHandles(),

            // Notifications
            'notify_organizer_of_new_orders' => $this->getNotifyOrganizerOfNewOrders(),

            // Display Settings
            'price_display_mode' => $this->getPriceDisplayMode(),
            'hide_getting_started_page' => $this->getHideGettingStartedPage(),
        ];
    }
}
