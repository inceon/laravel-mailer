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

    /**
     * Create a new message instance.
     *
     * @param $template
     */
    public function __construct($template)
    {
        $this->template = $template;
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
