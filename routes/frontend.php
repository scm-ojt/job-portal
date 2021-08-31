<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'landing']);
Route::get('/jobs', [PageController::class, 'allJobs']);
Route::get('/jobs/{id}', [PageController::class, 'jobDetail']);
Route::get('/companies', [PageController::class, 'allCompanies']);
Route::get('/companies/{id}', [PageController::class, 'companyDetail']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::post('/contact-us', [PageController::class, 'contactStore']);