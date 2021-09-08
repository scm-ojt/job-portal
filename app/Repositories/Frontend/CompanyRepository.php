<?php

namespace App\Repositories\Frontend;
use App\Models\Company;

class CompanyRepository 
{
  public function index()
  {
      return Company::orderBy('created_at','DESC')->paginate(12);
  }
  public function company($id)
  {
      return Company::findOrFail($id);
  }
  public function jobs($company)
  {
    return $company->jobs()->where('approve_status', 1)->get();
  }
}