<?php

namespace HiEvents\Http\Actions\Orders;

use HiEvents\Http\Resources\OrderResource;
use HiEvents\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetEventTransactionsAction
{
    public function __invoke(Request $request, int $eventId): JsonResponse
    {
        $orders = Order::with(['tickets', 'event', 'order_items', 'attendees'])
            ->where('event_id', $eventId)
            ->orderBy('created_at', 'desc')
            ->get();

        $totalAmount = $orders->sum('total_gross');
        $totalTransactions = $orders->count();

        return response()->json([
            'message' => 'Transactions retrieved successfully',
            'data' => [
                'total_amount' => $totalAmount,
                'total_transactions' => $totalTransactions,
                'transactions' => OrderResource::collection($orders)
            ]
        ]);
    }
}
