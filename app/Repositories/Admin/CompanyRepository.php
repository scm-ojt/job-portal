<?php

namespace App\Repositories\Admin;

use App\Models\Company;
use App\Models\User;

class CompanyRepository 
{
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        return $this->company->orderBy('id', 'DESC')->paginate(10);
    }

    public function destroy($company)
    {
        $company->delete();
        $company->users()->delete();
    }

}