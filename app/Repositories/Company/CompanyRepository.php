<?php

namespace App\Repositories\Company;

use App\Models\Company;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class CompanyRepository 
{
    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $company = $user->companies()->where('user_id', $user->id)->first();
        return $company;
    }

    public function edit($id)
    {   
        $company = Company::findOrFail($id);
        return $company;
    }

    public function update($company, $user)
    {   
        $company->update();
        $user->update();
    }

    public function destroy($company)
    {
        //
    }
}