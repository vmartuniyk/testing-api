<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogSubmissionSaved
{

    /**
     * Handle the event.
     */
    public function handle(SubmissionSaved $event)
    {
        $submission = $event->submission;
        Log::info("Submission saved: {$submission->name}, {$submission->email}");
    }
}
