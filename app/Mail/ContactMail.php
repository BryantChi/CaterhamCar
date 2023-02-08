<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $details)
    {
        //
        $this->title = $title;
        $this->details= $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ooooooooocamper@gmail.com')->subject($this->title)
        ->view('mail.contact-us-mail');
    }
}
