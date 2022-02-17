<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RestPassword extends Mailable
{
    use Queueable, SerializesModels;


    public $currentemail;
    public $newpassword;
    public $first_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$password,$first_name)
    {
         $this->currentemail = $email;
         $this->newpassword = $password;
         $this->first_name = $first_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('info@zameeli.com', 'Rest Password')
                ->view('emails.rest_password');

        return $this->view('emails.rest_password');
    }
}
