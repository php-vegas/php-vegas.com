<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TopicRequested extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    public $topic;

    /**
     * Create a new message instance.
     *
     * @param $topic
     */
    public function __construct(Request $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(getenv('MAIL_FROM'))
                    ->view('emails.topicRequest');
    }
}
