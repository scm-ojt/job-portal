<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing()
    {
        return view('frontend.top-page');
    }

    public function allJobs()
    {
        return view('frontend.all-jobs');
    }

    public function jobDetail($id)
    {
        return view('frontend.job-detail');
    }

    public function allCompanies()
    {
        return view('frontend.all-companies');
    }

    public function companyDetail($id)
    {
        return view('frontend.company-detail');
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }

    public function about()
    {
        return view('frontend.about-us');
    }
}
