<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;


class InvoiceGenerated extends Notification
{
    use Queueable;
    protected $invoice;


    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Dear '.Auth::user()->name)
            ->line('An invoice '.$this->invoice->invoice_number.' has been generated against your article entitled "'. $this->invoice->manuscript->title.'". To download the invoice please go to The ACE Publication portal. ')
/*                    ->action('Invoice Download', url('invoices/'.$this->invoice->Invoice_number))*/
                    ->line('Thank you for using our services!');
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
