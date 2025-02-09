<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Models\Order;
use HiEvents\Http\Resources\OrderResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GetBuyerOrderAction
{
    public function __invoke(Request $request, string $order_short_id): JsonResponse
    {
        $buyer = $request->user();
        $order = $buyer->orders()
            ->with(['tickets', 'event', 'order_items', 'attendees'])
            ->where('short_id', $order_short_id)
            ->first();

        if (!$order) {
            throw new NotFoundHttpException('Order not found');
        }

        return response()->json([
            'message' => 'Order retrieved successfully',
            'order' => new OrderResource($order),
        ]);
    }
}
