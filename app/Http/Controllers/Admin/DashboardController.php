<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\DashboardService;

class DashboardController extends Controller
{
    private $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function index()
    {
        $companies = $this->dashboardService->companyCount();
        $jobs = $this->dashboardService->jobCount();
        return view('admin.admin-dashboard', compact('companies','jobs'));
    }
}
