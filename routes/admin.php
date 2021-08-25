<?php

use Illuminate\Support\Facades\Route;

    Route::get('admin/dashboard', [App\Http\Controllers\Admin\UserController::class, 'dashboard']);
    Route::get('admin/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('admin/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::delete('admin/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);
    //companies
    Route::get('admin/companies', [App\Http\Controllers\Admin\CompanyController::class, 'index']);
    Route::delete('admin/companies/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'destroy']);
    Route::post('admin/companies/{id}/active', [App\Http\Controllers\Admin\CompanyController::class, 'active']);

    //categories
    Route::resource('admin/categories', App\Http\Controllers\Admin\CategoryController::class);

    //jobs
    Route::get('admin/jobs', [App\Http\Controllers\Admin\JobController::class, 'index']);

    Route::post('admin/jobs/{id}/approve', [App\Http\Controllers\Admin\JobController::class, 'approve']);

    //roles
    Route::get('admin/roles', [App\Http\Controllers\Admin\RoleController::class, 'index']);