<?php

use Illuminate\Support\Facades\Route;

    Route::get('admin/dashboard', [App\Http\Controllers\Admin\UserController::class, 'dashboard']);
    //companies
    Route::get('admin/companies', [App\Http\Controllers\Admin\CompanyController::class, 'index']);
    Route::post('admin/companies/{id}/active', [App\Http\Controllers\Admin\CompanyController::class, 'active']);

    //categories
    Route::resource('admin/categories', App\Http\Controllers\Admin\CategoryController::class);

    //jobs
    Route::get('admin/jobs', [App\Http\Controllers\Admin\JobController::class, 'index']);

    Route::post('admin/jobs/{id}/approve', [App\Http\Controllers\Admin\JobController::class, 'approve']);

    //roles
    Route::get('admin/roles', [App\Http\Controllers\Admin\RoleController::class, 'index']);