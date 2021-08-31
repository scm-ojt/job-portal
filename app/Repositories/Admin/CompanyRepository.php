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
        return $this->company->paginate(10);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        $company->users()->delete();
        return $company;
    }
}