<?php

namespace App\Services\Admin;

use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use App\Repositories\Admin\ProfileRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function companyCount()
    {
        $companies = Company::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
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

        return $companyArr;

    }

    public function jobCount()
    {
        $jobs = Job::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
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

        return $jobArr;
    }

    public function update($request, $id)
    {
        $user = User::findOrFail($id);

        if($request->hasFile('photo')){
            Storage::delete('/public/user-photos/'.$user->photo);
            $photo = $request->file('photo'); 
            $photoName = $photo->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public/user-photos',$photoName);
            $user->photo = $photoName ;
        }
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        
        return $this->profileRepository->update($user);
    }
}