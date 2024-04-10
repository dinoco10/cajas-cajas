<?php

namespace App\Mail;

use App\Models\Budget;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewBudget extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Budget $budget)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva petición de presupuesto',
            replyTo: $this->budget->email,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.budget',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
