<?php

namespace App\Services\Admin;

use App\Models\Job;
use App\Repositories\Admin\JobRepository;

class JobService
{
    protected $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function index()
    {
        return $this->jobRepository->index();
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        return $this->jobRepository->destroy($job);
    }

    public function approve($id)
    {
        $job = Job::findOrFail($id);
        return $this->jobRepository->approve($job);
    }
}