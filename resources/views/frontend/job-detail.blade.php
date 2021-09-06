@extends('frontend.frontend-layout.master')

@section('frontend-content')

<div style="position:relative">
    <img src="{{ asset('images/bg.jpg') }}" alt="" style="width:100%; height: 350px">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start mt-5">
                @if($job->company->logo)
                    <a href="{{url('companies/'.$job->company->id)}}"><img src="{{asset('storage/company-logos/'.$job->company->logo)}}"   style="width:140px; height:120px;" alt="" class="rounded img-thumbnail"></a>
                @else
                    <a href="{{url('companies/'.$job->company->id)}}"><img src="{{asset('images/default-company-logo.png')}}"   style="width:140px; height:120px;" alt="" class="rounded img-thumbnail"></a>
                @endif
        
                <div class="ml-5" > 
                    <h3 class="pb-2 " style=" font-weight:bold">{{$job->title}}</h3>
                    <a href="{{url('companies/'.$job->company->id)}}" style="color: #0BA5A9;"><h5 class="pb-2 " style="">{{$job->company->name}}</h5></a>
                    <div class="d-flex flex-row ">
                        <h6 class="p-2 pr-4" style=""><i class="fa fa-clock pr-2"></i>{{$job->employment_status}}</h6>
                        <h6 class="p-2" style=""><i class="fa fa-home pr-2"></i>{{$job->address}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>  
</div> 
<div class="container py-5" style="font-size: 15px;">
    <div class="section mb-5 ml-5">
        <h3>Job Requirements</h3>
        <ul>
            <li>{{$job->requirement}}</li>    
        </ul>
    </div>
    <div class="section mb-5 ml-5">
        <h3>Working Hour</h3>
        <p class="ml-4">
            {{$job->working_hour}} hours
        </p>
    </div>
    <div class="section mb-5 ml-5">
        <h3>Salary</h3>
        <p class="ml-4">
            * {{$job->salary}} MMK
        </p>
    </div>
    <div class="section mb-5 ml-5">
        <h3>Job Category</h3>
        <p class="ml-4">
            {{$job->category->name}}
        </p>
    </div>
    <div class="section mb-5 ml-5">
        <h3>Contact Information</h3>
        <p class="ml-4">
            {{$job->contact_information}}
        </p>
    </div>
</div>
@endsection