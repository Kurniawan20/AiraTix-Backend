<?php

namespace HiEvents\Http\Actions\Orders;

use HiEvents\Services\Handlers\Order\HandleMidtransNotification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class HandleWebHookMidtrans extends Controller
{
    public function __construct(
        private readonly HandleMidtransNotification $midtransHandler,
    ) {}

    public function handleNotification(Request $request)
    {
        Log::info('Midtrans Webhook Payload:', $request->all());
        file_put_contents(base_path('debug.txt'), json_encode($request->all()));
        $notificationData = $request->all();

        try {
            $this->midtransHandler->handle($notificationData);
            return response()->json(['message' => 'Notifikasi berhasil diproses.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
