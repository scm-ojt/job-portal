<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','company'])->group(function () {
    //company dashboard
    Route::get('company/dashboard', [App\Http\Controllers\Company\CompanyController::class, 'index']);
    Route::get('company/{id}/edit', [App\Http\Controllers\Company\CompanyController::class, 'edit']);
    Route::put('company/{id}', [App\Http\Controllers\Company\CompanyController::class, 'update']);

    //company post a job
    Route::get('company-jobs', [App\Http\Controllers\Company\JobController::class, 'index']);
    Route::get('company-jobs/create', [App\Http\Controllers\Company\JobController::class, 'create']);
    Route::post('company-jobs', [App\Http\Controllers\Company\JobController::class, 'store']);
    Route::get('company-jobs/{job_id}/edit', [App\Http\Controllers\Company\JobController::class, 'edit']);
    Route::put('company-jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'update']);
    Route::delete('company-jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'destroy']);
});
