<?php

namespace App\Services\Admin;

use App\Models\Company;
use App\Repositories\Admin\CompanyRepository;

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

    public function getCompanyId($id)
    {
        return Company::findOrFail($id);
    }
    
    public function destroy($id)
    {
        $company = $this->getCompanyId($id);
        return $this->companyRepository->destroy($company);
    }
}