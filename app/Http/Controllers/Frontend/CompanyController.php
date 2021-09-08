<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\CompanyService;

class CompanyController extends Controller
{   
    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->index();
        return view('frontend.all-companies',compact('companies'));
    }

    public function show($id)
    {
        $company = $this->companyService->company($id);
        $jobs = $this->companyService->jobs($company);
        return view('frontend.company-detail',compact('company', 'jobs'));
    }
    
}
