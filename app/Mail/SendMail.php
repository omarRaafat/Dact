<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public  $email_from;
    public  $subject;
    public  $mymessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $email , $subject , $message)
    {

        $this->name = $name;
        $this->email_from = $email;
        $this->subject = $subject;
        $this->mymessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = $this->email_from;
        $name = $this->name;
        $subject = $this->subject;

        return $this->view('mail')
            ->from($address, $name)
            ->subject($subject)
          ;

    }
}
