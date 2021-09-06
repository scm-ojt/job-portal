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

    public function store($job)
    {   
        $job->save();
    }
    public function edit($id) {
        $job = Job::findOrFail($id);
        return $job;
    }

    public function update($job)
    {   
        $job->update();
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return $job;
    }
}