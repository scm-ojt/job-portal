<?php

namespace App\Services\Admin;

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

    public function destroy($id)
    {
        return $this->companyRepository->destroy($id);
    }
}