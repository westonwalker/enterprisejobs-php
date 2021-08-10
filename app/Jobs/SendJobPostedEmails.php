<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Dotnetjob;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewJobPosted;

class SendJobPostedEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $newJob;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Dotnetjob $newJob)
    {
        $this->newJob = $newJob;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $subscribers = Subscriber::pluck('email')->toArray();
        foreach ($subscribers as $recipient) {
            Mail::to($recipient)->send(new NewJobPosted($this->newJob));
        }
    }
}