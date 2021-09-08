<?php

namespace App\Repositories\Admin;

use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobRepository 
{
    protected $job;

    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    public function index()
    {
        return $this->job->where('title', 'Like', "%".request('search')."%")->orderBy('id', 'DESC')->paginate(10);
    }

    public function destroy($job)
    {
        return $job->delete();
    }

    public function approve($job)
    {
        if($job->approve_status == 1) {
            $job->approve_status = 0;
            $job->approved_user_id = Auth::user()->id;
            $job->update();
        }elseif($job->approve_status == 0) {
            $job->approve_status = 1;
            $job->approved_user_id = Auth::user()->id;
            $job->update();
        }

        return $job;
    }
}