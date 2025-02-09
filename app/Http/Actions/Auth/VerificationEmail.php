<?php

namespace HiEvents\Http\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use HiEvents\Models\User as ModelsUser;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class VerificationEmail extends Controller
{
    public function verifyEmail(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');

        if (!$token || !$email) {
            return response()->json(['message' => 'Invalid verification link'], 400);
        }

        $user = ModelsUser::where('email', $email)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Update user's email verification
        $user->email_verified_at = now();
        $user->save();

        Log::info('User email verified', ['user_id' => $user->id, 'email' => $email]);

        // Get the first account associated with the user
        $account = $user->accounts()->first();

        if ($account) {
            Log::info('Found user account', ['account_id' => $account->id]);

            // Update account verification
            $account->account_verified_at = now();
            $saved = $account->save();

            Log::info('Account verification update attempt', [
                'account_id' => $account->id,
                'account_verified_at' => $account->account_verified_at,
                'save_result' => $saved
            ]);
        } else {
            Log::warning('No account found for user during email verification', ['user_id' => $user->id]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Your email has been successfully verified. You can now access all features of your account.',
            'verified_at' => now()->toISOString()
        ], 200);
    }
}
