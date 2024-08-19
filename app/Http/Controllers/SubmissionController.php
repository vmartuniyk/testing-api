<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitStoreRequest;
use App\Jobs\ProcessSubmission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(SubmitStoreRequest $storeRequest)
    {
        ProcessSubmission::dispatch($storeRequest->validated());

        return response()->json(['message' => 'Submission is being processed'], 202);
    }
}
