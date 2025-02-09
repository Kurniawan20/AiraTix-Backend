<?php

namespace HiEvents\Http\Actions\Public;

use HiEvents\Models\EmailOrganizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreEmailOrganizerAction
{
    public function __invoke(Request $request): JsonResponse
    {
        $validator = Validator::make(
            $request->all(), 
            [
                'email' => 'required|email|unique:email_organizer,email'
            ],
            [
                'email.required' => 'Email is required',
                'email.email' => 'Please enter a valid email address',
                'email.unique' => 'This email has already been registered'
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $emailOrganizer = EmailOrganizer::create([
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'Email stored successfully',
            'data' => [
                'id' => $emailOrganizer->id,
                'uuid' => $emailOrganizer->uuid,
                'email' => $emailOrganizer->email,
                'created_at' => $emailOrganizer->created_at
            ]
        ], 201);
    }
}
