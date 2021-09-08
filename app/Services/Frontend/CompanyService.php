<?php

namespace App\Services\Frontend;

use App\Repositories\Frontend\CompanyRepository;

class CompanyService{
    protected $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }
    
    public function index()
    {
        return $this->companyRepository->index();
    }
    public function company($id)
    {
        return $this->companyRepository->company($id);
    }
    public function jobs($company)
    {
        return $this->companyRepository->jobs($company);
    }
}