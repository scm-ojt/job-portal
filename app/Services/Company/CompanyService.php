<?php

namespace App\Services\Company;

use App\Repositories\Company\CompanyRepository;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CompanyService
{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        return $this->companyRepository->index();
    }

    public function edit($id)
    {
        return $this->companyRepository->edit($id);
    }

    public function update($request, $id)
    {   
        $company = Company::findOrFail($id);
        $company->name = $request->name;
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

        $userId = $company->users('company_id', $company->id)->first()->id;
        $user = User::findOrFail($userId);
        $user->name = $request->name;

        return $this->companyRepository->update($company, $user);
    }

    public function destroy($company)
    {
        //
    }
}