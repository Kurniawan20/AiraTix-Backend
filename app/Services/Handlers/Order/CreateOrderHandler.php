<?php

declare(strict_types=1);

namespace HiEvents\Services\Handlers\Order;

use HiEvents\DomainObjects\EventDomainObject;
use HiEvents\DomainObjects\EventSettingDomainObject;
use HiEvents\DomainObjects\Generated\PromoCodeDomainObjectAbstract;
use HiEvents\DomainObjects\OrderDomainObject;
use HiEvents\DomainObjects\PromoCodeDomainObject;
use HiEvents\DomainObjects\Status\EventStatus;
use HiEvents\Models\Buyer;
use HiEvents\Repository\Interfaces\EventRepositoryInterface;
use HiEvents\Repository\Interfaces\PromoCodeRepositoryInterface;
use HiEvents\Services\Domain\Order\OrderItemProcessingService;
use HiEvents\Services\Domain\Order\OrderManagementService;
use HiEvents\Services\Handlers\Order\DTO\CreateOrderPublicDTO;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\UnauthorizedException;
use Throwable;

class CreateOrderHandler
{
    public function __construct(
        private readonly EventRepositoryInterface     $eventRepository,
        private readonly PromoCodeRepositoryInterface $promoCodeRepository,
        private readonly OrderManagementService       $orderManagementService,
        private readonly OrderItemProcessingService   $orderItemProcessingService,
        private readonly DatabaseManager              $databaseManager,
    )
    {
        // Add test log to verify logging is working
        Log::info('CreateOrderHandler initialized');
    }

    /**
     * @throws Throwable
     */
    public function handle(
        int                  $eventId,
        CreateOrderPublicDTO $createOrderPublicDTO,
        bool                 $deleteExistingOrdersForSession = true
    ): OrderDomainObject
    {
        // Add test log at the start of handle method
        Log::info('CreateOrderHandler.handle started', [
            'event_id' => $eventId,
            'session_id' => $createOrderPublicDTO->session_identifier,
        ]);

        return $this->databaseManager->transaction(function () use ($eventId, $createOrderPublicDTO, $deleteExistingOrdersForSession) {
            $event = $this->eventRepository
                ->loadRelation(EventSettingDomainObject::class)
                ->findById($eventId);

            $this->validateEventStatus($event, $createOrderPublicDTO);

            $promoCode = $this->getPromoCode($createOrderPublicDTO, $eventId);

            if ($deleteExistingOrdersForSession) {
                $this->orderManagementService->deleteExistingOrders($eventId, $createOrderPublicDTO->session_identifier);
            }

            $order = $this->orderManagementService->createNewOrder(
                eventId: $eventId,
                event: $event,
                timeOutMinutes: $event->getEventSettings()?->getOrderTimeoutInMinutes(),
                locale: $createOrderPublicDTO->order_locale,
                promoCode: $promoCode,
                sessionId: $createOrderPublicDTO->session_identifier,
            );

            $orderItems = $this->orderItemProcessingService->process(
                order: $order,
                ticketsOrderDetails: $createOrderPublicDTO->tickets,
                event: $event,
                promoCode: $promoCode,
            );

            $order = $this->orderManagementService->updateOrderTotals($order, $orderItems);

            // Associate order with buyer if authenticated with buyer guard
            $buyer = Auth::guard('buyer')->user();
            if ($buyer instanceof Buyer) {
                try {
                    $buyer->orders()->attach($order->getId());
                    Log::info('Order associated with buyer', [
                        'order_id' => $order->getId(),
                        'order_short_id' => $order->getShortId(),
                        'buyer_id' => $buyer->id,
                        'buyer_email' => $buyer->email,
                    ]);
                } catch (\Exception $e) {
                    Log::error('Failed to associate order with buyer', [
                        'order_id' => $order->getId(),
                        'order_short_id' => $order->getShortId(),
                        'buyer_id' => $buyer->id,
                        'buyer_email' => $buyer->email,
                        'error' => $e->getMessage(),
                    ]);
                }
            } else {
                Log::info('Order created without buyer association', [
                    'order_id' => $order->getId(),
                    'order_short_id' => $order->getShortId(),
                ]);
            }

            return $order;
        });
    }

    private function getPromoCode(CreateOrderPublicDTO $createOrderPublicDTO, int $eventId): ?PromoCodeDomainObject
    {
        if ($createOrderPublicDTO->promo_code === null) {
            return null;
        }

        $promoCode = $this->promoCodeRepository->findFirstWhere([
            PromoCodeDomainObjectAbstract::CODE => strtolower(trim($createOrderPublicDTO->promo_code)),
            PromoCodeDomainObjectAbstract::EVENT_ID => $eventId,
        ]);

        if ($promoCode?->isValid()) {
            return $promoCode;
        }

        return null;
    }

    public function validateEventStatus(EventDomainObject $event, CreateOrderPublicDTO $createOrderPublicDTO): void
    {
        if (!$createOrderPublicDTO->is_user_authenticated && $event->getStatus() !== EventStatus::LIVE->name) {
            throw new UnauthorizedException(
                __('This event is not live.')
            );
        }
    }
}
