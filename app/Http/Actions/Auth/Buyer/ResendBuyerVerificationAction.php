<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResendBuyerVerificationAction
{
    public function __invoke(Request $request): JsonResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified.',
            ]);
        }

        $request->user()->sendEmailVerificationNotification();

        return response()->json([
            'message' => 'Verification link sent.',
        ]);
    }
}
