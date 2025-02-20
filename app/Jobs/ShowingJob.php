<?php

namespace App\Jobs;

use App\Models\Student;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ShowingJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Student $jobListen)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Student name: ' .$this->jobListen->name);
    }
}
