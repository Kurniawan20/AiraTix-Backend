<?php

namespace HiEvents\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $eventSettings = $this->whenLoaded('event_settings');
        
        return [
            'id' => $this->id,
            'title' => $this->title ?? '',
            'description' => $this->description ?? '',
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'location' => $eventSettings?->location ?? '',
            'location_details' => $eventSettings?->location_details ?? null,
            'status' => $this->status,
            'currency' => $this->currency,
            'timezone' => $this->timezone,
            'attributes' => $this->attributes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
