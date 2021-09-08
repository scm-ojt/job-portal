<?php

namespace App\Services\Company;

use App\Repositories\Company\JobRepository;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JobService
{
    protected $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function getJobId($id)
    {
        return Job::findOrFail($id);
    }

    public function getCategories()
    {
        return $this->jobRepository->getCategories();
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
        $user = User::findOrFail(Auth::user()->id);
        $companyId = $user->companies()->where('user_id', $user->id)->first()->id;

        $job = new Job;
        $job->company_id = $companyId;
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
        $user = User::findOrFail(Auth::user()->id);
        $companyId = $user->companies()->where('user_id', $user->id)->first()->id;

        $job = $this->getJobId($id);
        $job->company_id = $companyId;
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