<?php

namespace App\Repositories\Frontend;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;

class PageRepository 
{
  public function jobs()
  {
      return Job::where('approve_status',1)->orderBy('created_at','DESC')->paginate(8, ['*'], 'jobs');
  }
  public function companies()
  {
      return Company::orderBy('created_at','DESC')->paginate(8, ['*'], 'companies');
  } 
  public function categories()
  {
      return Category::all();
  } 
}