<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Models\Category;
use Auth;
use App\Http\Requests\JobUpdateRequest;
use App\Http\Requests\JobStoreRequest;
use App\Services\Company\JobService;
class JobController extends Controller
{
    private $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $company = $this->jobService->index();
        return view('company.company-jobs.index',  compact('company'));
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
    public function store(JobStoreRequest $request)
    {   
        $this->jobService->store($request);
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
        $job = Job::findOrFail($id);
        return view('company.company-jobs.jobs-detail', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $job = $this->jobService->edit($id);   
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
    public function update(JobUpdateRequest $request, $id)
    {   
        $this->jobService->update($request, $id);

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
        $this->jobService->destroy($id);

        return redirect('company-jobs');
    }
}
