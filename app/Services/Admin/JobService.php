<?php

namespace App\Services\Admin;

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
        return $this->jobRepository->destroy($id);
    }

    public function approve($request)
    {
        return $this->jobRepository->approve($request);
    }
}