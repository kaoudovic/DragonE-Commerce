<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReplay extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $message,$response;
    public function __construct($message,$response)
    {
        $this->message = $message;
        $this->replay = $response;
    }

    public function build()
    {
        return $this->markdown('backend.mails.messages.messageReplay',[
            'message' => $this->message,
            'response' => $this->response
            ]);
    }
}
