<?php

namespace HiEvents\Mail\Buyer;

use HiEvents\Models\Buyer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyBuyerEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        private readonly Buyer $buyer,
        private readonly string $verificationUrl
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verify Your Email Address - Airatix',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.buyer.verify',
            with: [
                'buyer' => $this->buyer,
                'verificationUrl' => $this->verificationUrl,
            ],
        );
    }
}
