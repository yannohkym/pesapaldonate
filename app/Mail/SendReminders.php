<?php

namespace App\Mail;

use App\Models\Donor;
use App\Models\EmailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SendReminders extends Mailable
{
    use Queueable, SerializesModels;
    private $donor;

    /**
     * Create a new message instance.
     *
     * @param Donor $donor
     */
    public function __construct(Donor $donor)
    {
      $this->donor = $donor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = URL::to('/');
        $message = "Hello dear esteemed member . We would like to thank you for your continued support.".PHP_EOL;
        $message.="This is a reminder to submit your donation contribution as promised. Please visit ".$url."  to make submit your contribution";
        $message.= "The Donors Huddle Team";
        $emailNotif = new EmailNotification();
        $emailNotif->message = $message;
        $emailNotif->sent_to = $this->donor->email;
        $emailNotif->save();
        return $this->view('mail.donation_reminder',['message'=>$message]);
    }
}
