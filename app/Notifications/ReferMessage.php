<?php

namespace App\Notifications;

use App\Http\Requests\ReferralFormRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReferMessage extends Notification
{
    use Queueable;

    protected $message;
    public function __construct(ReferralFormRequest $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(config('admin.name') . ", you got a new referral!")
            ->greeting(" ")
            ->salutation(" ")
            ->from($this->message->pat_email, $this->message->pat_name)
            ->line('Referee Details: ')
            ->line('Name: ', $this->message->ref_name)
            ->line('Title: ', $this->message->ref_title)
            ->line('Profession: ', $this->message->ref_profession)
            ->line('Address: ', $this->message->work_address)
            ->line('Patient Details:')
            ->line('Name: ', $this->message->pat_name)
            ->line('Title: ', $this->message->pat_title)
            ->line('Address: ', $this->message->pat_address)
            ->line('Number: ', $this->message->pat_number)
            ->line('Email: ', $this->message->pat_email)
            ->line('Reason for Referral: ', $this->message->reason)
            ->line('Medical Details: ', $this->message->medical)
            ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
