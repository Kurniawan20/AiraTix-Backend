<?php

namespace HiEvents\Http\Actions\Public;

use HiEvents\Models\EmailOrganizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class GetEmailOrganizerAction
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $perPage = $request->get('per_page', 10);
            $search = $request->get('search');

            $query = EmailOrganizer::query()
                ->select([
                    'email_organizer.id',
                    'email_organizer.uuid',
                    'email_organizer.email',
                    'email_organizer.created_at',
                    'email_organizer.updated_at',
                    'users.first_name',
                    'users.last_name',
                    DB::raw("CONCAT(users.first_name, ' ', COALESCE(users.last_name, '')) as full_name"),
                    'users.timezone',
                    'users.locale'
                ])
                ->leftJoin('users', 'email_organizer.email', '=', 'users.email');

            // Add search functionality
            if ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('email_organizer.email', 'LIKE', "%{$search}%")
                      ->orWhere('users.first_name', 'LIKE', "%{$search}%")
                      ->orWhere('users.last_name', 'LIKE', "%{$search}%");
                });
            }

            $emails = $query
                ->orderBy('email_organizer.created_at', 'desc')
                ->paginate($perPage);

            // Add search info to response if search was performed
            $responseData = [
                'total_emails' => $emails->total(),
                'current_page' => $emails->currentPage(),
                'per_page' => $emails->perPage(),
                'last_page' => $emails->lastPage(),
                'items' => collect($emails->items())->map(function($item) {
                    return [
                        'id' => $item->id,
                        'uuid' => $item->uuid,
                        'email' => $item->email,
                        'created_at' => $item->created_at,
                        'updated_at' => $item->updated_at,
                        'user' => $item->first_name ? [
                            'first_name' => $item->first_name,
                            'last_name' => $item->last_name,
                            'full_name' => $item->full_name,
                            'timezone' => $item->timezone,
                            'locale' => $item->locale
                        ] : null
                    ];
                })
            ];

            if ($search) {
                $responseData['search'] = [
                    'term' => $search,
                    'results_count' => $emails->total()
                ];
            }

            return response()->json([
                'message' => 'Email list retrieved successfully',
                'data' => $responseData
            ]);

        } catch (\Exception $e) {
            Log::error('Error retrieving email list', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'search_term' => $request->get('search')
            ]);

            return response()->json([
                'message' => 'Failed to retrieve email list',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}