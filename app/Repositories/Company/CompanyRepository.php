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
        foreach($user->companies as $company){
          $companyId = $company->id;
        }
        $company = Company::findOrFail($companyId);
        return $company;
    }

    public function edit($id)
    {   
        $user = User::findOrFail($id);
        foreach($user->companies as $company){
        $companyId = $company->id;
        }
        $company = Company::findOrFail($companyId);
        return $company;
    }

    public function update($request, $id)
    {   
        $company = Company::findOrFail($id);
        $company->company_type = $request->company_type;
        $company->phone_no = $request->phone_no;
        $company->address = $request->address;
        $company->no_of_employee = $request->no_of_employee;
        $company->history = $request->history;
        $company->description = $request->description;
        $company->contact_information = $request->contact_information;

        if($request->hasFile('logo')){
            Storage::delete('/public/company-logos/'.$company->logo);
            $logo = $request->file('logo');
            $logoName = $logo->getClientOriginalName();
            $path = $request->file('logo')->storeAs('public/company-logos',$logoName);
            $company->logo = $logoName;
        }

        $company->update();

        foreach($company->users as $user){
            $user->name = $request->name;
            $user->update();
        }
        return $company;
    }

    public function destroy($company)
    {
        //
    }
}