<?php

namespace HiEvents\Http\Actions\Category;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class GetFormatAction extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $data = DB::table('event_formats')->select('id', 'name', 'images as image')->orderBy('id', 'asc')->get();

            return response()->json(['status' => 200, 'data' => $data]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
