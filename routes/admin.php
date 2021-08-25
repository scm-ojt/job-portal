<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

    Route::get('admin/dashboard', [UserController::class, 'dashboard']);
    //companies
    Route::get('admin/companies', [CompanyController::class, 'index']);
    Route::post('admin/companies/{id}/active', [CompanyController::class, 'active']);

    //categories
    Route::resource('admin/categories', CategoryController::class);

    //jobs
    Route::get('admin/jobs', [JobController::class, 'index']);

    Route::post('admin/jobs/{id}/approve', [JobController::class, 'approve']);

    //roles
    Route::get('admin/roles', [RoleController::class, 'index']);