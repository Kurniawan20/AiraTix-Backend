<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Http\Resources\OrderResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetBuyerOrdersAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $buyer = $request->user();
        $orders = $buyer->orders()
            ->with(['tickets', 'event.event_settings', 'order_items', 'attendees'])
            ->get();

        return response()->json([
            'message' => 'Orders retrieved successfully',
            'orders' => OrderResource::collection($orders),
        ]);
    }
}
