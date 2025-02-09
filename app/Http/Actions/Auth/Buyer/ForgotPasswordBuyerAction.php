<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Http\Actions\BaseAction;
use HiEvents\Http\Requests\Auth\ForgotPasswordRequest;
use HiEvents\Models\Buyer;
use Illuminate\Support\Facades\Password;

class ForgotPasswordBuyerAction extends BaseAction
{
    public function __invoke(ForgotPasswordRequest $request)
    {
        $status = Password::broker('buyers')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)])
            : response()->json(['email' => __($status)], 422);
    }
}
