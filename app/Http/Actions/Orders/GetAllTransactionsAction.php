<?php

namespace HiEvents\Http\Actions\Orders;

use HiEvents\Http\Resources\OrderResource;
use HiEvents\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetAllTransactionsAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page', 10);
        $orders = Order::with(['tickets', 'event', 'order_items', 'attendees'])
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        $totalAmount = Order::sum('total_gross');

        return response()->json([
            'message' => 'Transactions retrieved successfully',
            'data' => [
                'total_amount' => $totalAmount,
                'total_transactions' => $orders->total(),
                'current_page' => $orders->currentPage(),
                'per_page' => $orders->perPage(),
                'last_page' => $orders->lastPage(),
                'transactions' => OrderResource::collection($orders->items())
            ]
        ]);
    }
}
