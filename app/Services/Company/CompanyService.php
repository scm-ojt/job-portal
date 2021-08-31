<?php

namespace App\Services\Company;

use App\Repositories\Company\CompanyRepository;

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

    public function update($request, $company)
    {
        return $this->companyRepository->update($request, $company);
    }

    public function destroy($company)
    {
        // return $this->CompanyRepository->destroy($category);
    }
}