<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Http\Actions\BaseAction;
use HiEvents\Http\Requests\Auth\ResetPasswordRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ResetPasswordBuyerAction extends BaseAction
{
    public function __invoke(ResetPasswordRequest $request)
    {
        $status = Password::broker('buyers')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => __($status)])
            : response()->json(['email' => __($status)], 422);
    }
}
