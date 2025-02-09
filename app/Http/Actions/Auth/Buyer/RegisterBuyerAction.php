<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Models\Buyer;
use HiEvents\Http\Request\Auth\Buyer\RegisterBuyerRequest;
use HiEvents\Http\Resources\BuyerResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class RegisterBuyerAction
{
    public function __invoke(RegisterBuyerRequest $request): JsonResponse
    {
        $buyer = Buyer::create([
            'name' => $request->validated('name'),
            'email' => strtolower($request->validated('email')),
            'phone' => $request->validated('phone'),
            'password' => Hash::make($request->validated('password')),
        ]);

        // Send verification email
        $buyer->sendEmailVerificationNotification();

        // Generate JWT token
        $token = JWTAuth::fromUser($buyer);

        return response()->json([
            'message' => 'Registration successful. Please check your email for verification instructions.',
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('buyer')->factory()->getTTL() * 60,
            'buyer' => new BuyerResource($buyer),
        ], 201);
    }
}
