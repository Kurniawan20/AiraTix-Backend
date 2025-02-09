<?php

namespace HiEvents\Http\Actions\Category;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class GetTopicAction extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $data = DB::table('event_topics')->select('id', 'name')->get();

            return response()->json(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
