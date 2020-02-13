<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Manuscript;
use Auth;

class FilesUploaded extends Notification
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
            ->subject('Manuscript '.$this->manuscript->code.' Submitted')
            ->greeting(Auth::user()->name)
            ->line('Your manuscript '.$this->manuscript->code.' submitted successfully.For further information, please login to the system with your credential.')
            ->action('Login', route('manuscript.manage'))
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
