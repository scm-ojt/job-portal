<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','company'])->group(function () {
    //company dashboard
    Route::get('company/dashboard', [App\Http\Controllers\Company\CompanyController::class, 'index'])->name('company.dashboard');
    Route::get('company/{id}/edit', [App\Http\Controllers\Company\CompanyController::class, 'edit'])->name('company.edit');
    Route::put('company/{id}', [App\Http\Controllers\Company\CompanyController::class, 'update'])->name('company.update');

    //company post a job
    Route::get('company-jobs', [App\Http\Controllers\Company\JobController::class, 'index'])->name('jobs.index');
    Route::get('company-jobs/create', [App\Http\Controllers\Company\JobController::class, 'create'])->name('jobs.create');
    Route::post('company-jobs', [App\Http\Controllers\Company\JobController::class, 'store'])->name('jobs.store');
    Route::get('company-jobs/{job_id}/edit', [App\Http\Controllers\Company\JobController::class, 'edit'])->name('jobs.edit');
    Route::put('company-jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'update'])->name('jobs.update');
    Route::get('company-jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'show'])->name('jobs.show');
    Route::delete('company-jobs/{job_id}', [App\Http\Controllers\Company\JobController::class, 'destroy'])->name('jobs.destroy');
});
