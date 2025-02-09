<?php

namespace HiEvents\Http\Actions\Events;

use HiEvents\DomainObjects\EventDomainObject;
use HiEvents\Exceptions\CannotChangeCurrencyException;
use HiEvents\Http\Actions\BaseAction;
use HiEvents\Http\Request\Event\UpdateEventRequest;
use HiEvents\Resources\Event\EventResource;
use HiEvents\Services\Handlers\Event\CreateEventImageHandler;
use HiEvents\Services\Handlers\Event\DTO\UpdateEventDTO;
use HiEvents\Services\Handlers\Event\UpdateEventHandler;
use HiEvents\Services\Handlers\Event\DTO\CreateEventImageDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Throwable;

class UpdateEventAction extends BaseAction
{
    public function __construct(
        private readonly UpdateEventHandler $updateEventHandler,
        private readonly CreateEventImageHandler $createEventImageHandler
    ) {}

    /**
     * @throws Throwable|ValidationException
     */
    public function __invoke(UpdateEventRequest $request, int $eventId): JsonResponse
    {

        $this->isActionAuthorized($eventId, EventDomainObject::class);
        $authorisedUser = $this->getAuthenticatedUser();
        try {
            $event = $this->updateEventHandler->handle(
                UpdateEventDTO::fromArray(
                    array_merge(
                        $request->validated(),
                        [
                            'id' => $eventId,
                            'account_id' => $this->getAuthenticatedAccountId(),
                            'user_id' => $authorisedUser->getId(),
                        ]
                    )
                )
            );

            if ($request->hasFile('cover_image')) {
                $coverImage = $request->file('cover_image');

                $this->createEventImageHandler->handle(
                    CreateEventImageDTO::fromArray([
                        'event_id' => $eventId,
                        'image' => $coverImage,
                        'type' => 'EVENT_COVER',
                    ])
                );
            }
        } catch (CannotChangeCurrencyException $exception) {
            throw ValidationException::withMessages([
                'currency' => $exception->getMessage(),
            ]);
        }

        return $this->resourceResponse(EventResource::class, $event);
    }
}
