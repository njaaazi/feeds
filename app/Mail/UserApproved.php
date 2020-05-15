<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserApproved extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $name, $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $url)
    {
        $this->email = $email;
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.UserApproved');
    }
}
