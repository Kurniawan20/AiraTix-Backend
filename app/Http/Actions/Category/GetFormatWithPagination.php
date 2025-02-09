<?php

namespace HiEvents\Http\Actions\Category;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class GetFormatWithPagination extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $data = DB::table('event_topics')
                ->select('*')
                ->paginate(request()->perPage ?? 10);

            return response()->json([
                'data' => $data->items(),
                'links' => [
                    'first' => $data->url(1),
                    'last' => $data->url($data->lastPage()),
                    'prev' => $data->previousPageUrl(),
                    'next' => $data->nextPageUrl(),
                ],
                'meta' => [
                    'current_page' => $data->currentPage(),
                    'from' => $data->firstItem(),
                    'last_page' => $data->lastPage(),
                    'links' => $data->linkCollection(),
                    'path' => $data->path(),
                    'per_page' => $data->perPage(),
                    'to' => $data->lastItem(),
                    'total' => $data->total(),
                    'allowed_sorts' => [
                        'order' => [
                            'asc' => 'Homepage order',
                        ],
                        'created_at' => [
                            'asc' => 'Oldest first',
                            'desc' => 'Newest first',
                        ],
                        'title' => [
                            'asc' => 'Title A-Z',
                            'desc' => 'Title Z-A',
                        ],
                        'sale_start_date' => [
                            'asc' => 'Sale start date closest',
                            'desc' => 'Sale start date furthest',
                        ],
                        'sale_end_date' => [
                            'asc' => 'Sale end date closest',
                            'desc' => 'Sale end date furthest',
                        ],
                    ],
                    'default_sort' => 'order',
                    'default_sort_direction' => 'asc',
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
