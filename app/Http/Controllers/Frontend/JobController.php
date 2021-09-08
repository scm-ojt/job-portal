<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\JobService;

class JobController extends Controller
{
    private $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function index()
    {
        $jobs = $this->jobService->index();
        return view('frontend.all-jobs', compact('jobs'));
    }

    public function show($id)
    {
        $job = $this->jobService->show($id);
        return view('frontend.job-detail', compact('job'));
    }    
}
