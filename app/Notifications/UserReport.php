<?php

namespace App\Notifications;

use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class UserReport extends Notification
{
    use Queueable;

    protected $user, $urabilitypdf, $product;


    /**
     * Create a new notification instance.
     *
     * @param $user
     * @param $urabilitypdf
     */
    public function __construct($user, $urabilitypdf)
    {
        $this->user = $user;
        $this->urabilitypdf = $urabilitypdf;


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
        Log::alert($this->urabilitypdf);

        return (new MailMessage)
            ->from('info@tsa.com')
            ->markdown('layouts.emails.user_report',['name'=>$this->user->name])
            ->subject('Recommend Products')
            ->attach($this->urabilitypdf);
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
