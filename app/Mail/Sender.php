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
        $subscriber = $this->subscriber;

        $template = str_replace('{F_NAME}', $subscriber->f_name, $template);
        $template = str_replace('{L_NAME}', $subscriber->s_name, $template);

        $unsubscribe_link = strpos($template, '{UNSUBSCRIBE}');
        $template = str_replace('{UNSUBSCRIBE}', URL::to('/').'/unsubscribe/'.$subscriber->id, $template);

        return $this->view('email.index', compact('template', 'subscriber', 'unsubscribe_link'));
    }
}
