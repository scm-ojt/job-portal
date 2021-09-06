<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->group(function () {

    Route::get('admin/dashboard', [App\Http\Controllers\Admin\ProfileController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/{id}/edit', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('admin.edit');
    Route::put('admin/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('admin.update');
    Route::put('admin/users/upload-photo/{id}', [\App\Http\Controllers\Admin\UserController::class, 'uploadFile'])->name('admin.uploadPhoto');
    //user
    Route::get('admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::get('admin/users/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::post('admin/users/{id}/active', [\App\Http\Controllers\Admin\UserController::class, 'active'])->name('admin.users.active');

    //companies
    Route::get('admin/companies', [App\Http\Controllers\Admin\CompanyController::class, 'index'])->name('admin.companies');
    Route::delete('admin/companies/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'destroy'])->name('admin.companies.destroy');
    Route::get('admin/companies/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'show'])->name('admin.companies.show');
    Route::get('admin/companies/{id}/jobs', [App\Http\Controllers\Admin\CompanyController::class, 'companyJobs'])->name('admin.companies.jobs');

    //categories
    Route::resource('admin/categories', App\Http\Controllers\Admin\CategoryController::class);

    //jobs
    Route::get('admin/jobs', [App\Http\Controllers\Admin\JobController::class, 'index'])->name('admin.jobs');
    Route::delete('admin/jobs/{id}', [App\Http\Controllers\Admin\JobController::class, 'destroy'])->name('admin.jobs.destroy');
    Route::get('admin/jobs/{id}', [App\Http\Controllers\Admin\JobController::class, 'show'])->name('admin.jobs.show');
    Route::post('admin/jobs/{id}/approve', [App\Http\Controllers\Admin\JobController::class, 'approve'])->name('admin.jobs.approve');

    //roles
    Route::get('admin/roles', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.roles');

    //contact-us
    Route::get('admin/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts');
    Route::delete('admin/contacts/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});