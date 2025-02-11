<?php

declare(strict_types=1);

namespace HiEvents\Services\Handlers\Order;

use Carbon\Carbon;
use Exception;
use HiEvents\DomainObjects\AttendeeDomainObject;
use HiEvents\DomainObjects\Generated\AttendeeDomainObjectAbstract;
use HiEvents\DomainObjects\Generated\OrderDomainObjectAbstract;
use HiEvents\DomainObjects\Generated\TicketPriceDomainObjectAbstract;
use HiEvents\DomainObjects\OrderDomainObject;
use HiEvents\DomainObjects\OrderItemDomainObject;
use HiEvents\DomainObjects\Status\AttendeeStatus;
use HiEvents\DomainObjects\Status\OrderPaymentStatus;
use HiEvents\DomainObjects\Status\OrderStatus;
use HiEvents\DomainObjects\TicketDomainObject;
use HiEvents\DomainObjects\TicketPriceDomainObject;
use HiEvents\Events\OrderStatusChangedEvent;
use HiEvents\Exceptions\ResourceConflictException;
use HiEvents\Helper\IdHelper;
use HiEvents\Models\Order;
use HiEvents\Repository\Eloquent\Value\Relationship;
use HiEvents\Repository\Interfaces\AttendeeRepositoryInterface;
use HiEvents\Repository\Interfaces\OrderRepositoryInterface;
use HiEvents\Repository\Interfaces\QuestionAnswerRepositoryInterface;
use HiEvents\Repository\Interfaces\TicketPriceRepositoryInterface;
use HiEvents\Services\Domain\Payment\Stripe\EventHandlers\PaymentIntentSucceededHandler;
use HiEvents\Services\Domain\Ticket\TicketQuantityUpdateService;
use HiEvents\Services\Handlers\Order\DTO\CompleteOrderAttendeeDTO;
use HiEvents\Services\Handlers\Order\DTO\CompleteOrderDTO;
use HiEvents\Services\Handlers\Order\DTO\CompleteOrderOrderDTO;
use HiEvents\Services\Handlers\Order\DTO\OrderQuestionsDTO;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RuntimeException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Midtrans\Config;
use Midtrans\Snap;

/**
 * @todo - Tidy this up
 */
class CompleteOrderHandler
{
    public function __construct(
        private readonly OrderRepositoryInterface          $orderRepository,
        private readonly AttendeeRepositoryInterface       $attendeeRepository,
        private readonly QuestionAnswerRepositoryInterface $questionAnswersRepository,
        private readonly TicketQuantityUpdateService       $ticketQuantityUpdateService,
        private readonly TicketPriceRepositoryInterface    $ticketPriceRepository,
    )
    {
        Config::$serverKey = "SB-Mid-server-WwzFJbCMyhCLtL14jmU2uA6I";
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    private function logInfo(string $message, array $context = []): void
    {
        Log::channel('orders')->info($message, $context);
    }

    private function logError(string $message, array $context = []): void
    {
        Log::channel('orders')->error($message, $context);
    }

    /**
     * @throws ResourceNotFoundException|ResourceConflictException|RuntimeException
     */
    public function handle(string $orderShortId, CompleteOrderDTO $orderData): OrderDomainObject
    {
        return DB::transaction(function () use ($orderData, $orderShortId) {
            try {
                $this->logInfo('Starting order completion transaction', [
                    'order_short_id' => $orderShortId,
                    'customer_email' => $orderData->order->email,
                    'timestamp' => now()->format('Y-m-d H:i:s'),
                ]);

                $orderDTO = $orderData->order;
                $order = $this->getOrder($orderShortId);

                $this->logInfo('Order fetched', [
                    'order_id' => $order->getId(),
                    'order_status' => $order->getStatus(),
                    'total_gross' => $order->getTotalGross(),
                ]);

                $updatedOrder = $this->updateOrder($order, $orderDTO);

                $this->logInfo('Order updated', [
                    'order_id' => $updatedOrder->getId(),
                    'new_status' => $updatedOrder->getStatus(),
                    'payment_status' => $updatedOrder->getPaymentStatus(),
                ]);

                // Set reserved_until to 24 hours from now
                $reservedUntil = Carbon::now()->addHours(24);
                DB::table('orders')->where('id', $order->getId())->update(['reserved_until' => $reservedUntil->toDateTimeString()]);

                $this->logInfo('Reserved until updated', [
                    'order_id' => $order->getId(),
                    'reserved_until' => $reservedUntil->toDateTimeString(),
                ]);

                $this->createAttendees($orderData->attendees, $order);

                $this->logInfo('Attendees created', [
                    'order_id' => $order->getId(),
                    'attendee_count' => $orderData->attendees->count(),
                ]);

                if ($orderData->order->questions) {
                    $this->createOrderQuestions($orderDTO->questions, $order);
                    $this->logInfo('Order questions created', [
                        'order_id' => $order->getId(),
                        'question_count' => $orderDTO->questions->count(),
                    ]);
                }

                $order_items = DB::table('order_items')->where('order_id', $order->getId())->get();
                $this->logInfo('Order items fetched', [
                    'order_id' => $order->getId(),
                    'item_count' => $order_items->count(),
                ]);

                foreach ($order_items as $item) {
                    $this->ticketQuantityUpdateService->increaseQuantitySold(
                        priceId: $item->ticket_price_id,
                        adjustment: $item->quantity
                    );
                }

                $order2 = DB::table('orders')->where('short_id', $orderShortId)->first();

                // Midtrans transaction details
                $transactionDetails = [
                    'order_id' => $order->getShortId(),
                    'gross_amount' => (int)$order->getTotalGross(),
                ];

                $customerDetails = [
                    'first_name' => $order2->first_name,
                    'last_name' => $order2->last_name,
                    'email' => $order2->email,
                ];

                $params = [
                    'transaction_details' => $transactionDetails,
                    'customer_details' => $customerDetails,
                    'custom_expiry' => [
                        'order_time' => now()->format('Y-m-d H:i:s P'),
                        'expiry_duration' => 60,
                        'unit' => 'minute',
                    ],
                ];

                $this->logInfo('Preparing Midtrans payment', [
                    'transaction_details' => $transactionDetails,
                    'customer_details' => $customerDetails,
                    'expiry' => $params['custom_expiry'],
                ]);

                try {
                    $snapToken = Snap::getSnapToken($params);
                    $url = Snap::getSnapUrl($params);
                    $updatedOrder->setPaymentToken($snapToken);
                    $updatedOrder->setPaymentUrl($url);

                    DB::table('orders')->where('id', $order->getId())->update([
                        'snap_token' => $snapToken,
                        'payment_url' => $url
                    ]);

                    $this->logInfo('Midtrans payment token created', [
                        'order_id' => $order->getId(),
                        'snap_token' => $snapToken,
                        'payment_url' => $url,
                    ]);

                } catch (\Exception $e) {
                    $this->logError('Midtrans payment token creation failed', [
                        'order_id' => $order->getId(),
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString(),
                    ]);
                    throw new RuntimeException(__('Failed to create payment token: ') . $e->getMessage());
                }

                OrderStatusChangedEvent::dispatch($updatedOrder);

                $this->logInfo('Order completion transaction successful', [
                    'order_id' => $order->getId(),
                    'final_status' => $updatedOrder->getStatus(),
                    'payment_status' => $updatedOrder->getPaymentStatus(),
                ]);

                return $updatedOrder;

            } catch (\Exception $e) {
                $this->logError('Order completion transaction failed', [
                    'order_short_id' => $orderShortId,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);
                throw $e;
            }
        });
    }

    /**
     * @throws Exception
     */
    private function createAttendees(Collection $attendees, OrderDomainObject $order): void
    {
        $inserts = [];

        $ticketsPrices = $this->ticketPriceRepository->findWhereIn(
            field: TicketPriceDomainObjectAbstract::ID,
            values: $attendees->pluck('ticket_price_id')->toArray(),
        );

        $this->validateTicketPriceIdsMatchOrder($order, $ticketsPrices);
        $this->validateAttendees($order, $attendees);

        foreach ($attendees as $attendee) {
            $ticketId = $ticketsPrices->first(
                fn(TicketPriceDomainObject $ticketPrice) => $ticketPrice->getId() === $attendee->ticket_price_id)
                ->getTicketId();

            $inserts[] = [
                AttendeeDomainObjectAbstract::EVENT_ID => $order->getEventId(),
                AttendeeDomainObjectAbstract::TICKET_ID => $ticketId,
                AttendeeDomainObjectAbstract::TICKET_PRICE_ID => $attendee->ticket_price_id,
                AttendeeDomainObjectAbstract::STATUS => AttendeeStatus::ACTIVE->name,
                AttendeeDomainObjectAbstract::EMAIL => $attendee->email,
                AttendeeDomainObjectAbstract::FIRST_NAME => $attendee->first_name,
                AttendeeDomainObjectAbstract::LAST_NAME => $attendee->last_name,
                AttendeeDomainObjectAbstract::ORDER_ID => $order->getId(),
                AttendeeDomainObjectAbstract::PUBLIC_ID => IdHelper::publicId(IdHelper::ATTENDEE_PREFIX),
                AttendeeDomainObjectAbstract::SHORT_ID => IdHelper::shortId(IdHelper::ATTENDEE_PREFIX),
                AttendeeDomainObjectAbstract::LOCALE => $order->getLocale(),
            ];
        }

        if (!$this->attendeeRepository->insert($inserts)) {
            throw new RuntimeException(__('Failed to create attendee'));
        }

        $insertedAttendees = $this->attendeeRepository->findWhere([
            AttendeeDomainObjectAbstract::ORDER_ID => $order->getId()
        ]);

        $this->createAttendeeQuestions($attendees, $insertedAttendees, $order, $ticketsPrices);
    }

    private function createOrderQuestions(Collection $questions, OrderDomainObject $order): void
    {
        $questions->each(function (OrderQuestionsDTO $orderQuestionsDTO) use ($order) {
            if (empty($orderQuestionsDTO->response)) {
                return;
            }
            $this->questionAnswersRepository->create([
                'question_id' => $orderQuestionsDTO->question_id,
                'answer' => $orderQuestionsDTO->response['answer'] ?? $orderQuestionsDTO->response,
                'order_id' => $order->getId(),
            ]);
        });
    }

    private function createAttendeeQuestions(
        Collection        $attendees,
        Collection        $insertedAttendees,
        OrderDomainObject $order,
        Collection        $ticketPrices,
    ): void
    {
        $insertedIds = [];
        /** @var CompleteOrderAttendeeDTO $attendee */
        foreach ($attendees as $attendee) {
            $ticketId = $ticketPrices->first(
                fn(TicketPriceDomainObject $ticketPrice) => $ticketPrice->getId() === $attendee->ticket_price_id)
                ->getTicketId();

            $attendeeIterator = $insertedAttendees->filter(
                fn(AttendeeDomainObject $insertedAttendee) => $insertedAttendee->getTicketId() === $ticketId
                    && !in_array($insertedAttendee->getId(), $insertedIds, true)
            )->getIterator();

            if ($attendee->questions === null) {
                continue;
            }

            foreach ($attendee->questions as $question) {
                $attendeeId = $attendeeIterator->current()->getId();

                if (empty($question->response)) {
                    continue;
                }

                $this->questionAnswersRepository->create([
                    'question_id' => $question->question_id,
                    'answer' => $question->response['answer'] ?? $question->response,
                    'order_id' => $order->getId(),
                    'ticket_id' => $ticketId,
                    'attendee_id' => $attendeeId
                ]);

                $insertedIds[] = $attendeeId;
            }
        }
    }

    /**
     * @throws ResourceConflictException
     */
    private function validateOrder(OrderDomainObject $order): void
    {
        if ($order->getEmail() !== null) {
            throw new ResourceConflictException(__('This order has already been processed'));
        }

        if (Carbon::createFromTimeString($order->getReservedUntil())->isPast()) {
            throw new ResourceConflictException(__('This order has expired'));
        }

        if ($order->getStatus() !== OrderStatus::RESERVED->name) {
            throw new ResourceConflictException(__('This order has already been processed'));
        }
    }

    /**
     * @throws ResourceConflictException
     */
    private function getOrder(string $orderShortId): OrderDomainObject
    {
        $order = $this->orderRepository
            ->loadRelation(
                new Relationship(
                    domainObject: OrderItemDomainObject::class,
                    nested: [new Relationship(TicketDomainObject::class, name: 'ticket')]
                ))
            ->findByShortId($orderShortId);

        if ($order === null) {
            throw new ResourceNotFoundException(__('Order not found'));
        }

        $this->validateOrder($order);

        return $order;
    }

    private function updateOrder(OrderDomainObject $order, CompleteOrderOrderDTO $orderDTO): OrderDomainObject
    {
        return $this->orderRepository
            ->loadRelation(OrderItemDomainObject::class)
            ->updateFromArray(
                $order->getId(),
                [
                    OrderDomainObjectAbstract::FIRST_NAME => $orderDTO->first_name,
                    OrderDomainObjectAbstract::LAST_NAME => $orderDTO->last_name,
                    OrderDomainObjectAbstract::EMAIL => $orderDTO->email,
                    OrderDomainObjectAbstract::PAYMENT_STATUS => $order->isPaymentRequired()
                        ? OrderPaymentStatus::AWAITING_PAYMENT->name
                        : OrderPaymentStatus::NO_PAYMENT_REQUIRED->name,
                    OrderDomainObjectAbstract::STATUS => $order->isPaymentRequired()
                        ? OrderStatus::RESERVED->name
                        : OrderStatus::COMPLETED->name,
                ]
            );
    }

    /**
     * Check if the passed ticket price IDs match what exist in the order_items table
     *
     * @throws ResourceConflictException
     */
    private function validateTicketPriceIdsMatchOrder(OrderDomainObject $order, Collection $ticketsPrices): void
    {
        $orderTicketPriceIds = $order->getOrderItems()
            ?->map(fn(OrderItemDomainObject $orderItem) => $orderItem->getTicketPriceId())->toArray();

        $ticketsPricesIds = $ticketsPrices->map(fn(TicketPriceDomainObject $ticketPrice) => $ticketPrice->getId());

        if ($ticketsPricesIds->diff($orderTicketPriceIds)->isNotEmpty()) {
            throw new ResourceConflictException(__('There is an unexpected ticket price ID in the order'));
        }
    }

    /**
     * @throws ResourceConflictException
     */
    private function validateAttendees(OrderDomainObject $order, Collection $attendees): void
    {
        $orderAttendeeCount = $order->getOrderItems()->sum(fn(OrderItemDomainObject $orderItem) => $orderItem->getQuantity());

        if ($orderAttendeeCount !== $attendees->count()) {
            throw new ResourceConflictException(
                __('The number of attendees does not match the number of tickets in the order')
            );
        }
    }
}
