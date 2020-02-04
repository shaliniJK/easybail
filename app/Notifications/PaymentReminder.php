<?php

namespace App\Notifications;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Mail\PaymentReminder as Mailable;

class PaymentReminder extends Notification
{
    use Queueable;

    public $date;

    public $amount;

    public $landlord;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $date, string $amount, string $landlord)
    {
        $this->date = $date;
        $this->amount = $amount;
        $this->landlord = $landlord;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if ($notifiable->email === null) {
            throw new Exception('Cannot email user. Email is empty');
        }

        return (new Mailable(
            $this->date,
            $this->amount,
            $this->landlord
        ))->to($notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        ];
    }
}
