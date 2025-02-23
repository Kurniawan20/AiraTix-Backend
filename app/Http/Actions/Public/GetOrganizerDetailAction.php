<?php

namespace HiEvents\Http\Actions\Public;

use HiEvents\Models\EmailOrganizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GetOrganizerDetailAction
{
    public function __invoke(Request $request, string $uuid): JsonResponse
    {
        try {
            $organizer = EmailOrganizer::query()
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
                    'users.locale',
                    'users.email_verified_at'
                ])
                ->leftJoin('users', 'email_organizer.email', '=', 'users.email')
                // Get account info
                ->leftJoin('account_users', 'users.id', '=', 'account_users.user_id')
                ->leftJoin('accounts', 'account_users.account_id', '=', 'accounts.id')
                ->where('email_organizer.uuid', $uuid)
                ->first();

            if (!$organizer) {
                throw new NotFoundHttpException('Organizer not found');
            }

            // Get events count and total sales
            $eventStats = DB::table('events')
                ->leftJoin('orders', 'events.id', '=', 'orders.event_id')
                ->where('events.organizer_id', $organizer->id)
                ->select([
                    DB::raw('COUNT(DISTINCT events.id) as total_events'),
                    DB::raw('COALESCE(SUM(orders.total_gross), 0) as total_sales'),
                    DB::raw('COUNT(DISTINCT CASE WHEN orders.payment_status = \'COMPLETED\' THEN orders.id END) as total_orders')
                ])
                ->first();

            return response()->json([
                'message' => 'Organizer details retrieved successfully',
                'data' => [
                    'id' => $organizer->id,
                    'uuid' => $organizer->uuid,
                    'email' => $organizer->email,
                    'created_at' => $organizer->created_at,
                    'updated_at' => $organizer->updated_at,
                    'user' => $organizer->first_name ? [
                        'first_name' => $organizer->first_name,
                        'last_name' => $organizer->last_name,
                        'full_name' => $organizer->full_name,
                        'timezone' => $organizer->timezone,
                        'locale' => $organizer->locale,
                        'email_verified' => !is_null($organizer->email_verified_at),
                        'verified_at' => $organizer->email_verified_at
                    ] : null,
                    'stats' => [
                        'total_events' => $eventStats->total_events ?? 0,
                        'total_sales' => $eventStats->total_sales ?? 0,
                        'total_orders' => $eventStats->total_orders ?? 0,
                        'member_since' => $organizer->created_at->format('Y-m-d')
                    ]
                ]
            ]);

        } catch (NotFoundHttpException $e) {
            return response()->json([
                'message' => 'Organizer not found',
                'error' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            Log::error('Error retrieving organizer details', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'uuid' => $uuid
            ]);

            return response()->json([
                'message' => 'Failed to retrieve organizer details',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}