<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Frontend\PageController::class, 'index']);

Route::get('jobs', [App\Http\Controllers\Frontend\JobController::class, 'index']);
Route::get('jobs/{id}', [App\Http\Controllers\Frontend\JobController::class, 'show']);

Route::get('companies', [App\Http\Controllers\Frontend\CompanyController::class, 'index']);
Route::get('companies/{id}', [App\Http\Controllers\Frontend\CompanyController::class, 'show']);

Route::get('about-us', [App\Http\Controllers\Frontend\AboutController::class, 'index']);

Route::get('contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index']);
Route::post('contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'store']);