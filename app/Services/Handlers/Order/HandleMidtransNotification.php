<?php

namespace HiEvents\Services\Handlers\Order;

use Carbon\Carbon;
use Exception;
use HiEvents\DomainObjects\Generated\OrderDomainObjectAbstract;
use HiEvents\DomainObjects\OrderDomainObject;
use HiEvents\DomainObjects\OrderItemDomainObject;
use HiEvents\DomainObjects\Status\OrderPaymentStatus;
use HiEvents\DomainObjects\Status\OrderStatus;
use HiEvents\Events\OrderStatusChangedEvent;
use HiEvents\Repository\Interfaces\OrderRepositoryInterface;
use HiEvents\Services\Domain\Ticket\TicketQuantityUpdateService;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class HandleMidtransNotification
{
    public function __construct(
        private readonly OrderRepositoryInterface $orderRepository,
        private readonly TicketQuantityUpdateService $ticketQuantityUpdateService,
    ) {}

    /**
     * Handle Midtrans notification callback.
     *
     * @param array $notificationData Data yang dikirimkan oleh Midtrans webhook
     * @throws Exception
     */
    public function handle(array $notificationData): void
    {
        DB::transaction(function () use ($notificationData) {
            $orderId = $notificationData['order_id'] ?? null;

            if (!$orderId) {
                throw new RuntimeException(__('Order ID tidak ditemukan di notifikasi.'));
            }

            /** @var OrderDomainObject $order */
            $order = $this->orderRepository->loadRelation(OrderItemDomainObject::class)->findByShortId($orderId);

            if (!$order) {
                throw new RuntimeException(__('Order tidak ditemukan untuk ID: :id', ['id' => $orderId]));
            }

            $this->validateOrderStatus($order);

            $this->updateOrderStatuses($order, $notificationData);

            OrderStatusChangedEvent::dispatch($order);
        });
    }

    /**
     * Validasi status order sebelum diproses.
     *
     * @param OrderDomainObject $order
     * @throws RuntimeException
     */
    private function validateOrderStatus(OrderDomainObject $order): void
    {
        if (!in_array($order->getPaymentStatus(), [
            OrderPaymentStatus::AWAITING_PAYMENT->name,
            OrderPaymentStatus::PAYMENT_FAILED->name,
        ], true)) {
            throw new RuntimeException(__('Order tidak menunggu pembayaran. Order ID: :id', [
                'id' => $order->getId(),
            ]));
        }

        if ((new Carbon($order->getReservedUntil()))->isPast()) {
            throw new RuntimeException(__('Order telah kadaluarsa. Order ID: :id', ['id' => $order->getId()]));
        }
    }

    /**
     * Perbarui status pesanan berdasarkan notifikasi dari Midtrans.
     *
     * @param OrderDomainObject $order
     * @param array $notificationData
     * @return void
     */
    private function updateOrderStatuses(OrderDomainObject $order, array $notificationData): void
    {
        $transactionStatus = $notificationData['transaction_status'] ?? null;

        if ($transactionStatus === 'settlement') {
            $paymentStatus = OrderPaymentStatus::PAYMENT_RECEIVED->name;
            $orderStatus = OrderStatus::COMPLETED->name;
        } elseif ($transactionStatus === 'pending') {
            $paymentStatus = OrderPaymentStatus::AWAITING_PAYMENT->name;
            $orderStatus = OrderStatus::RESERVED->name;
        } elseif (in_array($transactionStatus, ['deny', 'expire', 'cancel'], true)) {
            $paymentStatus = OrderPaymentStatus::PAYMENT_FAILED->name;
            $orderStatus = OrderStatus::CANCELLED->name;

            // Return tickets to inventory when order is cancelled/expired
            foreach ($order->getOrderItems() as $orderItem) {
                $this->ticketQuantityUpdateService->decreaseQuantitySold(
                    $orderItem->getTicketPriceId(),
                    $orderItem->getQuantity()
                );
            }
        } else {
            throw new RuntimeException(__('Status transaksi tidak dikenal: :status', [
                'status' => $transactionStatus,
            ]));
        }

        $this->orderRepository
            ->loadRelation(OrderItemDomainObject::class)
            ->updateFromArray($order->getId(), [
                OrderDomainObjectAbstract::PAYMENT_STATUS => $paymentStatus,
                OrderDomainObjectAbstract::STATUS => $orderStatus,
            ]);
    }
}
