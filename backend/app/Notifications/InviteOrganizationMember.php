<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Organization;
use App\InviteOrgMember;

class InviteOrganizationMember extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(InviteOrgMember $InviteOrgMember ,Organization $Organization)
    {
        $this->InviteOrgMember = $InviteOrgMember;
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
        $InviteOrgMember = $this->InviteOrgMember;
        $Organization = $this->Organization;
        return (new MailMessage)
        ->subject('Invited at hearecho')
        ->view('email-views.invite_org_member_view',['InviteOrgMember' => $InviteOrgMember, 'Organization' => $Organization]);
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
