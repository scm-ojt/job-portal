<?php

namespace App\Repositories\Frontend;
use App\Models\Job;
class JobRepository 
{
  public function index()
  {
      return Job::where('approve_status',1)->orderBy('created_at','DESC')->paginate(8);
  }
  public function show($id)
  {
      return Job::findOrFail($id);
  }
}


