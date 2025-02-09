<?php

namespace HiEvents\Http\Actions\Events;

use HiEvents\Exceptions\OrganizerNotFoundException;
use HiEvents\Http\Actions\BaseAction;
use HiEvents\Http\Request\Event\CreateEventRequest;
use HiEvents\Resources\Event\EventResource;
use HiEvents\Services\Handlers\Event\CreateEventHandler;
use HiEvents\Services\Handlers\Event\CreateEventImageHandler;
use HiEvents\Services\Handlers\Event\DTO\CreateEventDTO;
use HiEvents\Services\Handlers\Event\DTO\CreateEventImageDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Throwable;

class CreateEventAction extends BaseAction
{
    public function __construct(
        private readonly CreateEventHandler $createEventHandler,
        private readonly CreateEventImageHandler $createEventImageHandler
    ) {}

    /**
     * @throws ValidationException|Throwable
     */
    public function __invoke(CreateEventRequest $request): JsonResponse
    {
        $authorisedUser = $this->getAuthenticatedUser();

        $eventData = array_merge(
            $request->validated(),
            [
                'account_id' => $this->getAuthenticatedAccountId(),
                'user_id' => $authorisedUser->getId(),
                'format_id' => (int) $request->input('format_id'),
                'topic_id' => (int) $request->input('topic_id'),
            ]
        );

        try {
            // Create the event
            $event = $this->createEventHandler->handle(
                eventData: CreateEventDTO::fromArray($eventData)
            );

            // Handle the cover image if provided
            if ($request->hasFile('cover_image')) {
                $coverImage = $request->file('cover_image');

                $this->createEventImageHandler->handle(
                    CreateEventImageDTO::fromArray([
                        'event_id' => $event->getId(),
                        'image' => $coverImage,
                        'type' => 'EVENT_COVER',
                    ])
                );
            }

        } catch (OrganizerNotFoundException $e) {
            throw ValidationException::withMessages([
                'organizer_id' => $e->getMessage(),
            ]);
        }

        return $this->resourceResponse(EventResource::class, $event);
    }
}
