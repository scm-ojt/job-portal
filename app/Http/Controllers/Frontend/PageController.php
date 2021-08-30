<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Contact;

class PageController extends Controller
{
    public function landing()
    {
        $jobs = Job::where('approve_status',1)->get();
        $companies = Company::all();
        return view('frontend.top-page', compact('jobs','companies'));
    }

    public function allJobs()
    {   
        $jobs = Job::where('approve_status',1)->get();
        $companies = Company::all();
        return view('frontend.all-jobs', compact('jobs','companies'));
    }

    public function jobDetail($id)
    {
        $job = Job::findOrFail($id);
        return view('frontend.job-detail', compact('job'));
    }

    public function allCompanies()
    {   $companies = Company::paginate(5);
        return view('frontend.all-companies',compact('companies'));
    }

    public function companyDetail($id)
    {   
        $user = User::findOrFail($id);
        foreach($user->companies as $company){
            $companyId = $company->id;
        }
        $company = Company::findOrFail($companyId);
        return view('frontend.company-detail',compact('company','user'));
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }

    public function contactStore(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact-us')->with('success', 'You have been sent successfully!');
    }

    public function about()
    {
        return view('frontend.about-us');
    }
}
