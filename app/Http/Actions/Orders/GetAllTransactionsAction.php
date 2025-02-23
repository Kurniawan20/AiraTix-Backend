<?php

namespace HiEvents\Http\Actions\Orders;

use HiEvents\Http\Resources\OrderResource;
use HiEvents\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class GetAllTransactionsAction
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $perPage = $request->get('per_page', 10);

            // Get orders with relationships
            $orders = Order::with(['tickets', 'event', 'order_items', 'attendees'])
                ->orderBy('created_at', 'desc')
                ->paginate($perPage);

            // Convert items to collection and group by event_id
            $groupedTransactions = collect($orders->items())
                ->groupBy('event_id')
                ->map(function ($transactions, $eventId) {
                    $event = $transactions->first()->event;

                    return [
                        'event_id' => $eventId,
                        'event_title' => $event->title,
                        'event_start_date' => $event->start_date,
                        'event_end_date' => $event->end_date,
                        'total_amount' => $transactions->sum('total_gross'),
                        'transaction_count' => $transactions->count(),
                        'transactions' => OrderResource::collection($transactions)
                    ];
                })
                ->values();

            // Calculate totals
            $totalAmount = Order::sum('total_gross');

            return response()->json([
                'message' => 'Transactions retrieved successfully',
                'data' => [
                    'total_amount' => $totalAmount,
                    'total_transactions' => $orders->total(),
                    'current_page' => $orders->currentPage(),
                    'per_page' => $orders->perPage(),
                    'last_page' => $orders->lastPage(),
                    'events' => $groupedTransactions
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Error retrieving transactions', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'message' => 'Failed to retrieve transactions',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
