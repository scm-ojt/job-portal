<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Contact;
use App\Http\Requests\ContactStoreRequest;

class PageController extends Controller
{
    public function landing()
    {
        $jobs = Job::where('approve_status',1)->paginate(8);
        $companies = Company::paginate(8);
        return view('frontend.top-page', compact('jobs','companies'));
    }

    public function allJobs()
    {   
        $jobs = Job::where('approve_status',1)->paginate(8);
        return view('frontend.all-jobs', compact('jobs'));
    }

    public function jobDetail($id)
    {
        $job = Job::findOrFail($id);
        foreach($job->user->companies as $company){
            $companyId = $company->id;
        }
        $company = Company::findOrFail($companyId);
        return view('frontend.job-detail', compact('job','company'));
    }

    public function allCompanies()
    {   $companies = Company::paginate(10);
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

    public function contactStore(ContactStoreRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact-us')->with('success', 'Thank you!
        Your message has been successfully sent.');
    }

    public function about()
    {
        return view('frontend.about-us');
    }
}
