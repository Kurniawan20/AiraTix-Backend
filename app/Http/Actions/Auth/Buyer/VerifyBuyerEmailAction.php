<?php

namespace HiEvents\Http\Actions\Auth\Buyer;

use HiEvents\Models\Buyer;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Support\Facades\Config;

class VerifyBuyerEmailAction
{
    public function __invoke(Request $request, $id)
    {
        try {
            if (!$request->hasValidSignature()) {
                throw new InvalidSignatureException;
            }

            $buyer = Buyer::findOrFail($id);

            if (!hash_equals(sha1($buyer->getEmailForVerification()), (string) $request->route('hash'))) {
                throw new InvalidSignatureException;
            }

            if ($buyer->hasVerifiedEmail()) {
                return redirect(config('app.frontend_url_verify') . '/email-verification?status=already-verified');
            }

            if ($buyer->markEmailAsVerified()) {
                event(new Verified($buyer));
            }

            return redirect(config('app.frontend_url_verify') . '/email-verification?status=success');

        } catch (InvalidSignatureException $e) {
            return redirect(config('app.frontend_url_verify') . '/email-verification?status=invalid');
        } catch (\Exception $e) {
            return redirect(config('app.frontend_url_verify') . '/email-verification?status=error');
        }
    }
}
