<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyUpdateRequest;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        foreach($user->companies as $company){
          $company_id = $company->id;
        }
        $company = Company::findOrFail($company_id);
        return view('company.company-dashboard', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        foreach($user->companies as $company){
          $company_id = $company->id;
        }
        $company = Company::findOrFail($company_id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, $id)
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
      return redirect('company/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
