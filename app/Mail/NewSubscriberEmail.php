<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscriber;

class NewSubscriberEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $newSubscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscriber $newSubscriber)
    {
        $this->newSubscriber = $newSubscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply.dotnetjobs@gmail.com', 'New Subscriber')->view('emails.newsubscriber');
    }
}