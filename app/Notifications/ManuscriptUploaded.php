<?php

namespace App\Notifications;

use App\Models\Manuscript;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ManuscriptUploaded extends Notification
{
    use Queueable;
    protected $manuscript;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Manuscript $manuscript)
    {
        $this->manuscript = $manuscript;
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
            ->subject('New Manuscript Uploaded.')
            ->greeting('Hi Dear.')
            ->line('New Manuscript '.$this->manuscript->code.' has been Submitted by the '. $this->manuscript->user->name.' at '. $this->manuscript->created_at->format('M d Y').'.')
            ->line('Please login to the Control Panel for further actions.')
            ->action('Login', route('console.manuscripts'))
            ->line('Thank your for using our application.');
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
