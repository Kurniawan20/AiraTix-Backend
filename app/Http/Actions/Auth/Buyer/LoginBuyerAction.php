<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Models\Buyer;
use HiEvents\Http\Request\Auth\Buyer\LoginBuyerRequest;
use HiEvents\Http\Resources\BuyerResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class LoginBuyerAction
{
    public function __invoke(LoginBuyerRequest $request): JsonResponse
    {
        $buyer = Buyer::where('email', strtolower($request->validated('email')))->first();

        if (!$buyer || !Hash::check($request->validated('password'), $buyer->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Generate JWT token
        $token = JWTAuth::fromUser($buyer);

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('buyer')->factory()->getTTL() * 60,
            'buyer' => new BuyerResource($buyer),
        ]);
    }
}
