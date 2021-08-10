<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Dotnetjob;

class NewJobPosted extends Mailable
{
    use Queueable, SerializesModels;
    
    public $newJob;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Dotnetjob $newJob)
    {
        $this->newJob = $newJob;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply.dotnetjobs@gmail.com', 'DotnetJobs')->view('emails.newjob');
    }
}