<?php

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\JobController;
use Illuminate\Support\Facades\Route;

    //company dashboard
    Route::get('company/dashboard', [CompanyController::class, 'index']);
    Route::get('company/{id}/edit', [CompanyController::class, 'edit']);
    Route::put('company/{id}', [CompanyController::class, 'update']);

    //company post a job
    Route::get('company/{company_id}/jobs', [JobController::class, 'index']);
    Route::get('company/{company_id}/jobs/create', [JobController::class, 'create']);
    Route::post('company/{company_id}/jobs', [JobController::class, 'store']);
    Route::get('company/{company_id}/jobs/{job_id}/edit', [JobController::class, 'edit']);
    Route::put('company/{company_id}/jobs/{job_id}', [JobController::class, 'update']);
    Route::delete('company/{company_id}/jobs/{job_id}', [JobController::class, 'destroy']);