<?php

namespace App\Repositories\Company;

use App\Models\Company;
use App\Models\User;
use App\Models\Job;
use App\Models\Category;
use Auth;
use Illuminate\Support\Facades\Storage;

class JobRepository 
{
    protected $job;

    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);
        return $user;
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
        $job->save();

        return $job;
    }
    public function edit($id) {
        $job = Job::findOrFail($id);
        return $job;
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
        $job->update();

        return $job;
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return $job;
    }
}