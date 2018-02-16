<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionOccured extends Mailable
{
    use Queueable, SerializesModels;
    private $content;

    /**
     * Create a new message instance.
     *
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.exception')->with('content', $this->content);
    }
}
