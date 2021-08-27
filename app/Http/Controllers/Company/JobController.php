<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Category;
use Auth;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);
        return view('company.company-jobs.index',  compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        $categories = Category::all();
        return view('company.company-jobs.create', compact('jobs','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job;
        $job->company_id = Auth::user()->id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->employment_status = $request->employment_status;
        $job->address = $request->address;
        $job->salary = $request->salary;
        $job->working_hour = $request->working_hour;
        $job->requirement = $request->requirement;
        $job->contact_information = $request->contact_information;
        $job->save();

        return redirect('company-jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $job = Job::findOrFail($id);
        $categories = Category::all();
        return view('company.company-jobs.edit', compact('job','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->company_id = Auth::user()->id;
        $job->category_id = $request->category_id;
        $job->title = $request->title;
        $job->employment_status = $request->employment_status;
        $job->address = $request->address;
        $job->salary = $request->salary;
        $job->working_hour = $request->working_hour;
        $job->requirement = $request->requirement;
        $job->contact_information = $request->contact_information;
        $job->update();

        return redirect('company-jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('company-jobs');
    }
}
