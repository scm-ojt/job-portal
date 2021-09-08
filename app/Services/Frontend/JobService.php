<?php

namespace App\Services\Frontend;

use App\Repositories\Frontend\JobRepository;

class JobService{
    protected $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }
    
    public function index()
    {
        return $this->jobRepository->index();
    }
    public function show($id)
    {
        return $this->jobRepository->show($id);
    }
}