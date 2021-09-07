<?php

namespace App\Services\Company;

use App\Repositories\Company\JobRepository;
use App\Models\Job;
use Auth;

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
        $job = new Job;
        $job->user_id = Auth::user()->id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->employment_status = $request->employment_status;
        $job->address = $request->address;
        $job->salary = $request->salary;
        $job->working_hour = $request->working_hour;
        $job->requirement = $request->requirement;
        $job->contact_information = $request->contact_information;

        return $this->jobRepository->store($job);
    }

    public function update($request, $id)
    {
        $job = Job::findOrFail($id);
        $job->user_id = Auth::user()->id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->employment_status = $request->employment_status;
        $job->address = $request->address;
        $job->salary = $request->salary;
        $job->working_hour = $request->working_hour;
        $job->requirement = $request->requirement;
        $job->contact_information = $request->contact_information;

        return $this->jobRepository->update($job);
    }

    public function destroy($job)
    {
        return $this->jobRepository->destroy($job);
    }
}