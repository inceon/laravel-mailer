<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\URL;

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
        $template = $this->template;
        $subcriber = $this->subscriber;

        $template = str_replace('{F_NAME}', $subcriber->f_name, $template);
        $template = str_replace('{L_NAME}', $subcriber->s_name, $template);

        $template = str_replace('{UNSUBSCRIBE}', URL::to('/').'/unsubscribe/'.$subcriber->id, $template);

        return $this->view('email.index', compact('template'));
    }
}
