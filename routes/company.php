<?php

use Illuminate\Support\Facades\Route;

    //company dashboard
    Route::get('company/dashboard', [App\Http\Controllers\Company\CompanyController::class, 'index']);
    Route::get('company/{id}/edit', [App\Http\Controllers\Company\CompanyController::class, 'edit']);
    Route::put('company/{id}', [App\Http\Controllers\Company\CompanyController::class, 'update']);

    //company post a job
    Route::get('company/{company_id}/jobs', [App\Http\Controllers\Company\JobController::class, 'index']);
    Route::get('company/{company_id}/jobs/create', [App\Http\Controllers\Company\JobController::class, 'create']);
    Route::post('company/{company_id}/jobs', [App\Http\Controllers\Company\JobController::class, 'store']);
    Route::get('company/{company_id}/jobs/{job_id}/edit', [App\Http\Controllers\Company\JobController::class, 'edit']);
    Route::put('company/{company_id}/jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'update']);
    Route::delete('company/{company_id}/jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'destroy']);