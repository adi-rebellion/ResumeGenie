<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\ContactItem;
use App\Organization;

class ClaimOrganization extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactItem $ContactItem ,Organization $Organization)
    {
        $this->ContactItem = $ContactItem;
        $this->Organization = $Organization;
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
        $ContactItem = $this->ContactItem;
        $Organization = $this->Organization;
        return (new MailMessage)
        ->subject('Claim your Organization at hearecho')
        ->view('email-views.claim_org_view',['ContactItem' => $ContactItem, 'Organization' => $Organization]);
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
