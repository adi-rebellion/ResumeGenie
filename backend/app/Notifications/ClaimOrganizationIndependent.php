<?php

namespace App\Notifications;

use App\ClaimOrgLedger;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\ContactItem;
use App\Organization;

class ClaimOrganizationIndependent extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ClaimOrgLedger $ClaimOrgLedger ,Organization $Organization)
    {
        $this->ClaimOrgLedger = $ClaimOrgLedger;
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
        $ClaimOrgLedger = $this->ClaimOrgLedger;
        $Organization = $this->Organization;
        return (new MailMessage)
        ->subject('Claim your Organization at hearecho')
        ->view('email-views.claim_org_ind_view',['ClaimOrgLedger' => $ClaimOrgLedger, 'Organization' => $Organization]);
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
