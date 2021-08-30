@extends('frontend.frontend-layout.master')

@section('frontend-content')

<img src="images/job-main-banner.jpg" alt="" style="width:1349px; ">          
<div class="container py-5">
    <div class="section mb-5">
        <h3>All Jobs</h3>
        @foreach($jobs as $job)
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card p-3" style="background-color: #EAEAF1">
                    <div class="row px-3">
                        @foreach($job->user->companies as $key => $company)
                            <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="col-md-1 ">
                        @endforeach
                        <div class="col-md-4">
                            <a href="{{url('jobs/'.$job->id)}}">
                                <h5 class="font-weight-bold" style="color: #3490DC">{{$job->title}}</h5>
                            </a>
                            <a href="{{url('/jobs/users/'.$job->user->id)}}"><span>{{$job->user->name? $job->user->name : ""}}</span></a>
                        </div>
                        <div class="col-md-5">
                            <h5 class="font-weight-bold">{{$job->address}}</h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="font-weight-bold">{{$job->employment_status}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach    
    </div>
</div>
@endsection
