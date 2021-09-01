<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Company;
use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Services\Admin\ProfileService;
use Carbon\Carbon;

class ProfileController extends Controller
{
    private $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    public function dashboard()
    {
        $companies = Company::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $companymcount = [];
        $companyArr = [];

        foreach ($companies as $key => $value) {
            $companymcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($companymcount[$i])){
                $companyArr[$i] = $companymcount[$i];    
            }else{
                $companyArr[$i] = 0;    
            }
        }

        $jobs = Job::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $jobmcount = [];
        $jobArr = [];

        foreach ($jobs as $key => $value) {
            $jobmcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($jobmcount[$i])){
                $jobArr[$i] = $jobmcount[$i];    
            }else{
                $jobArr[$i] = 0;
            }
        }
        return view('admin.admin-dashboard', compact('companyArr','jobArr'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.profile', compact('user','roles'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->profileService->update($request, $id);
        return redirect()->back();
    }

}
