<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\AdminVerifyEmial;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AdminVerifiyEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

     protected $emailDetails;

    public function __construct($emailDetails)
    {

        $this->emailDetails = $emailDetails;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        Mail::to($this->emailDetails['email'])->send(new AdminVerifyEmial($this->emailDetails));
    }
}
