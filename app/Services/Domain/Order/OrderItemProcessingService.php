<?php

namespace HiEvents\Services\Domain\Order;

use HiEvents\DomainObjects\EventDomainObject;
use HiEvents\DomainObjects\Generated\TicketDomainObjectAbstract;
use HiEvents\DomainObjects\OrderDomainObject;
use HiEvents\DomainObjects\PromoCodeDomainObject;
use HiEvents\DomainObjects\TaxAndFeesDomainObject;
use HiEvents\DomainObjects\TicketDomainObject;
use HiEvents\DomainObjects\TicketPriceDomainObject;
use HiEvents\Helper\Currency;
use HiEvents\Repository\Interfaces\OrderRepositoryInterface;
use HiEvents\Repository\Interfaces\TicketRepositoryInterface;
use HiEvents\Services\Domain\Tax\TaxAndFeeCalculationService;
use HiEvents\Services\Domain\Ticket\DTO\OrderTicketPriceDTO;
use HiEvents\Services\Domain\Ticket\TicketPriceService;
use HiEvents\Services\Domain\Ticket\TicketQuantityUpdateService;
use HiEvents\Services\Handlers\Order\DTO\TicketOrderDetailsDTO;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

readonly class OrderItemProcessingService
{
    public function __construct(
        private OrderRepositoryInterface    $orderRepository,
        private TicketRepositoryInterface   $ticketRepository,
        private TaxAndFeeCalculationService $taxCalculationService,
        private TicketPriceService          $ticketPriceService,
        private TicketQuantityUpdateService $ticketQuantityUpdateService,
    )
    {
    }

    /**
     * @param OrderDomainObject $order
     * @param Collection<TicketOrderDetailsDTO> $ticketsOrderDetails
     * @param EventDomainObject $event
     * @param PromoCodeDomainObject|null $promoCode
     * @return Collection
     */
    public function process(
        OrderDomainObject      $order,
        Collection             $ticketsOrderDetails,
        EventDomainObject      $event,
        ?PromoCodeDomainObject $promoCode
    ): Collection
    {
        $orderItems = collect();

        foreach ($ticketsOrderDetails as $ticketOrderDetail) {
            $ticket = $this->ticketRepository
                ->loadRelation(TaxAndFeesDomainObject::class)
                ->loadRelation(TicketPriceDomainObject::class)
                ->findFirstWhere([
                    TicketDomainObjectAbstract::ID => $ticketOrderDetail->ticket_id,
                    TicketDomainObjectAbstract::EVENT_ID => $event->getId(),
                ]);

            if ($ticket === null) {
                throw new ResourceNotFoundException(
                   __('Ticket with id :id not found', ['id' => $ticketOrderDetail->ticket_id])
                );
            }

            $ticketOrderDetail->quantities->each(function (OrderTicketPriceDTO $ticketPrice) use ($promoCode, $order, $orderItems, $ticket) {
                if ($ticketPrice->quantity === 0) {
                    return;
                }

                try {

                    // // First increase the quantity to reserve tickets
                    // $this->ticketQuantityUpdateService->increaseQuantitySold(
                    //     priceId: $ticketPrice->price_id,
                    //     adjustment: $ticketPrice->quantity
                    // );

                    // Then create the order item
                    $orderItemData = $this->calculateOrderItemData($ticket, $ticketPrice, $order, $promoCode);
                    $orderItems->push($this->orderRepository->addOrderItem($orderItemData));

                    Log::info('Increased ticket quantity and created order item', [
                        'order_id' => $order->getId(),
                        'order_short_id' => $order->getShortId(),
                        'ticket_id' => $ticket->getId(),
                        'price_id' => $ticketPrice->price_id,
                        'quantity' => $ticketPrice->quantity,
                    ]);
                } catch (\Exception $e) {
                    Log::error('Failed to increase ticket quantity or create order item', [
                        'order_id' => $order->getId(),
                        'order_short_id' => $order->getShortId(),
                        'ticket_id' => $ticket->getId(),
                        'price_id' => $ticketPrice->price_id,
                        'quantity' => $ticketPrice->quantity,
                        'error' => $e->getMessage(),
                    ]);
                    throw $e;
                }
            });
        }

        return $orderItems;
    }

    private function calculateOrderItemData(
        TicketDomainObject     $ticket,
        OrderTicketPriceDTO    $ticketPriceDetails,
        OrderDomainObject      $order,
        ?PromoCodeDomainObject $promoCode
    ): array
    {
        $prices = $this->ticketPriceService->getPrice($ticket, $ticketPriceDetails, $promoCode);
        $priceWithDiscount = $prices->price;
        $priceBeforeDiscount = $prices->price_before_discount;

        $itemTotalWithDiscount = $priceWithDiscount * $ticketPriceDetails->quantity;

        $taxesAndFees = $this->taxCalculationService->calculateTaxAndFeesForTicket(
            ticket: $ticket,
            price: $priceWithDiscount,
            quantity: $ticketPriceDetails->quantity
        );

        return [
            'ticket_id' => $ticket->getId(),
            'ticket_price_id' => $ticketPriceDetails->price_id,
            'quantity' => $ticketPriceDetails->quantity,
            'price_before_discount' => $priceBeforeDiscount,
            'total_before_additions' => Currency::round($itemTotalWithDiscount),
            'price' => $priceWithDiscount,
            'order_id' => $order->getId(),
            'item_name' => $this->getOrderItemLabel($ticket, $ticketPriceDetails->price_id),
            'total_tax' => $taxesAndFees->taxTotal,
            'total_service_fee' => $taxesAndFees->feeTotal,
            'total_gross' => Currency::round($itemTotalWithDiscount + $taxesAndFees->taxTotal + $taxesAndFees->feeTotal),
            'taxes_and_fees_rollup' => $taxesAndFees->rollUp,
        ];
    }

    private function getOrderItemLabel(TicketDomainObject $ticket, int $priceId): string
    {
        if ($ticket->isTieredType()) {
            return $ticket->getTitle() . ' - ' . $ticket->getTicketPrices()
                    ?->filter(fn($p) => $p->getId() === $priceId)->first()
                    ?->getLabel();
        }

        return $ticket->getTitle();
    }
}
