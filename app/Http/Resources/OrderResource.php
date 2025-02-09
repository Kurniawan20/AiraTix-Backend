<?php

namespace HiEvents\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'short_id' => $this->short_id,
            'status' => $this->status,
            'total_price' => $this->total_gross,
            'payment_status' => $this->payment_status,
            'payment_url' => $this->payment_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'event' => new EventResource($this->whenLoaded('event')),
            'tickets' => $this->whenLoaded('tickets', function() {
                return $this->tickets->map(function($ticket) {
                    $orderItem = $this->order_items->where('ticket_id', $ticket->id)->first();
                    return [
                        'id' => $ticket->id,
                        'title' => $ticket->title ?? '',
                        'description' => $ticket->description ?? '',
                        'quantity' => $orderItem ? $orderItem->quantity : 0,
                        'price_paid' => $orderItem ? $orderItem->price : 0,
                        'original_price' => $ticket->sales_volume ?? 0,
                        'attendees' => $this->whenLoaded('attendees', function() use ($ticket) {
                            return $this->attendees
                                ->where('ticket_id', $ticket->id)
                                ->map(function($attendee) {
                                    return [
                                        'id' => $attendee->id,
                                        'name' => $attendee->name ?? '',
                                        'firstname' => $attendee->firstname ?? '',
                                        'lastname' => $attendee->lastname ?? '',
                                        'email' => $attendee->email ?? '',
                                        'check_in_status' => $attendee->check_in_status,
                                        'short_id' => $attendee->short_id,
                                        'public_id' => $attendee->public_id,
                                        'status' => $attendee->status,
                                        'checked_in_at' => $attendee->checked_in_at,
                                    ];
                                });
                        }),
                    ];
                });
            }),
        ];
    }
}
