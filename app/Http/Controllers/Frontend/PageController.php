<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;

class PageController extends Controller
{
    public function index()
    {
        $jobs = Job::where('approve_status',1)->paginate(8);
        $companies = Company::paginate(8);
        return view('frontend.top-page', compact('jobs','companies'));
    }
}
