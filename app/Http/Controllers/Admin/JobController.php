<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\JobService;

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
        $jobs = $this->jobService->index();
        return view('admin.jobs.index', compact('jobs'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = $this->jobService->getJobId($id);
        return view('admin.jobs.job-detail', compact('job'));
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
        return redirect('admin/jobs')->with('success', 'Job deleted successfully!');
    }

    public function approve($id)
    {
        $this->jobService->approve($id);
        return redirect()->back();
    }

}
