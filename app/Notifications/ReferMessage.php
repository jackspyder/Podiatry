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
            ->line($this->message->ref_name)
            ->line($this->message->ref_title)
            ->line($this->message->ref_profession)
            ->line($this->message->work_address)
            ->line('Patient Details: ')
            ->line($this->message->pat_name)
            ->line($this->message->pat_title)
            ->line($this->message->pat_address)
            ->line($this->message->pat_number)
            ->line($this->message->pat_email)
            ->line($this->message->reason)
            ->line($this->message->medical)
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
