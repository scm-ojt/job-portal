@extends('frontend.frontend-layout.master')
@section('frontend-content')

    
        <img src="{{asset('images/banner.jpg')}}" alt="" style="width:100%;" >
    
    <div class="container py-5">
        <div class="section mb-5">
            <h3>Top Jobs</h3>
            <div class="row mt-3">
                <div class="col-md-12">
                @foreach($jobs as $job)
                    <div class="card p-3 my-3" style="background-color: #EAEAF1">
                        <div class="row px-3">
                            @foreach($job->user->companies as $key => $company)
                            <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="col-md-1 " style="width:100px; height:50px;">
                            @endforeach
                           
                            <div class="col-md-4">
                                <a href="{{url('jobs/'.$job->id)}}"><h5 class="font-weight-bold" style="color: #3490DC">{{$job->title}}</h5></a>
                                <a href="{{url('companies/'.$job->user->id)}}"><span>{{$job->user->name? $job->user->name : ''}}</span></a>
                            </div>
                            <div class="col-md-5">
                                <h5 class="font-weight-bold">{{$job->address}}</h5>
                            </div>
                            <div class="col-md-2">
                                <h5 class="font-weight-bold">{{$job->employment_status}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>    
        </div>
        
        <div class="section mb-5">
            <h3>Companies</h3>
            <div class="row mt-3">
                @foreach($companies as $company)
                    <div class="col-md-3 my-3">
                        <div class="card p-3 shadow-md border border-dark">
                        
                                <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded" height="120">  
                           
                           
                            @foreach($company->users as $key => $user)
                            <a href="{{url('/companies/'.$user->id)}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">{{$user->name}}</h5></a>
                            @endforeach
                        
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection