<?php

namespace App\Services\Admin;

use App\Models\Company;
use App\Models\Job;
use Carbon\Carbon;

class DashboardService
{
    public function companyCount()
    {
        $companies = Company::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $companyMonthCount = [];
        $companyArr = [];

        foreach ($companies as $key => $value) {
            $companyMonthCount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($companyMonthCount[$i])){
                $companyArr[$i] = $companyMonthCount[$i];    
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
        $jobMonthCount = [];
        $jobArr = [];

        foreach ($jobs as $key => $value) {
            $jobMonthCount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($jobMonthCount[$i])){
                $jobArr[$i] = $jobMonthCount[$i];    
            }else{
                $jobArr[$i] = 0;
            }
        }

        return $jobArr;
    }

}