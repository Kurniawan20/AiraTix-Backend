<?php

namespace HiEvents\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use HiEvents\Services\Domain\Ticket\TicketQuantityUpdateService;
use Illuminate\Support\Facades\Log;

class ReleaseExpiredOrdersCommand extends Command
{
    protected $signature = 'orders:release-expired';
    protected $description = 'Release tickets from expired reserved orders';

    public function __construct(
        private TicketQuantityUpdateService $ticketQuantityUpdateService
    ) {
        parent::__construct();
    }

    public function handle()
    {
        try {
            // Find orders that are past their reserved_until time and still in RESERVED status
            $expiredOrders = DB::table('orders')
                ->where('reserved_until', '<=', Carbon::now())
                ->where('status', 'RESERVED')
                ->get();

            $this->info("Found {$expiredOrders->count()} expired orders to process.");

            foreach ($expiredOrders as $order) {
                // Get order items to release ticket quantities
                $orderItems = DB::table('order_items')
                    ->where('order_id', $order->id)
                    ->get();

                foreach ($orderItems as $item) {
                    // Release ticket quantities
                    $this->ticketQuantityUpdateService->decreaseQuantitySold(
                        $item->ticket_price_id,
                        $item->quantity
                    );
                }

                // Update order status
                DB::table('orders')
                    ->where('id', $order->id)
                    ->update([
                        'status' => 'EXPIRED',
                        'reserved_until' => null
                    ]);

                Log::info("Released expired order: {$order->short_id}");
                $this->info("Released expired order: {$order->short_id}");
            }

            return Command::SUCCESS;
        } catch (\Exception $e) {
            Log::error('Error releasing expired orders: ' . $e->getMessage());
            $this->error('Error releasing expired orders: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}