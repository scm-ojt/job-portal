<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CompanyService;

class CompanyController extends Controller
{
    private $companyService;

    public function __construct(CompanyService $companyService)
    {   
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companyService->index();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = $this->companyService->getCompanyId($id);
        return view('admin.companies.company-detail', compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->companyService->destroy($id);
        return redirect('admin/companies')->with('success', 'Company has been deleted successfully!');
    }

    public function jobs($id)
    {
        $company = $this->companyService->getCompanyId($id);
        return view('admin.companies.company-jobs', compact('company'));
    }

}
