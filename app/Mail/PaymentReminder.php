<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $date;

    public $amount;

    public $landlord;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $date, string $amount, string $landlord)
    {
        $this->date = $date;
        $this->amount = $amount;
        $this->landlord = $landlord;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.payments.reminder');
    }
}
