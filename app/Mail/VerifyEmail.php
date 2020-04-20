<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Crypt;
use Illuminate\Queue\SerializesModels;
use App\user;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    public function __construct(user $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $encryptedEmail = Crypt::encrypt($this->user->email);

        $link = route('verify',['token' => $encryptedEmail]);

        $subject = 'Verify your email address';
        return $this->from('travelagency@gmail.com')
        ->subject($subject)
        ->with(['link' => $link, 'subject' => $subject])
        ->view('email.verify');
    }
}
