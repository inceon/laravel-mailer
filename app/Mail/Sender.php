<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sender extends Mailable
{
    use Queueable, SerializesModels;

    protected $template;
    protected $subscriber;

    /**
     * Create a new message instance.
     *
     * @param $template
     */
    public function __construct($template, $subscriber)
    {
        $this->template = $template;
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.index', [
            'template' => $this->template
        ]);
    }
}
