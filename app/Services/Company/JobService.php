<?php

namespace App\Services\Company;

use App\Repositories\Company\JobRepository;

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

    public function edit($id)
    {
        return $this->jobRepository->edit($id);
    }

    public function store($request)
    {
        return $this->jobRepository->store($request);
    }

    public function update($request, $job)
    {
        return $this->jobRepository->update($request, $job);
    }

    public function destroy($job)
    {
        return $this->jobRepository->destroy($job);
    }
}