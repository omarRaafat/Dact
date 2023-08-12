<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public  $mymessage='';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@demingacademy.com';
        $name = 'DACT';
        $subject = 'NEW COURSE REGISTERED SUCCESSFULLY !';
        return $this->view('mail')
            ->from($address, $name)
            ->subject($subject)
          ;

    }
}
