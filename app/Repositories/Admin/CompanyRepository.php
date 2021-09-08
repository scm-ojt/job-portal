<?php

namespace App\Repositories\Admin;

use App\Models\Company;

class CompanyRepository 
{
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        return $this->company->where('name', 'Like', "%".request('search')."%")->orderBy('id', 'DESC')->paginate(10);
    }

    public function destroy($company)
    {
        $company->delete();
        $company->users()->delete();
        $company->jobs()->delete();
    }
}