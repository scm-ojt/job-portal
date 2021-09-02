<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        $jobs = Job::where('approve_status',1)->orderBy('created_at','DESC')->paginate(8);
        $companies = Company::orderBy('created_at','DESC')->paginate(8);
        $categories = Category::all();
        return view('frontend.top-page', compact('jobs','companies','categories'));
    }
}
