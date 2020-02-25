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

    public function __construct(Manuscript $manuscript)
    {
        $this->manuscript = $manuscript;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

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

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
