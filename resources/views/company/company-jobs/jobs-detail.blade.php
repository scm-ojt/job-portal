@extends('company.company-layout.master')

@section('company-content')
<div class="container-fluid">
    <a href="{{ route('jobs.index') }}" class="btn btn-primary float-right mr-5"><i class="fa fa-arrow-circle-left mr-1"></i>Back</a>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                @foreach ($job->user->companies as $company)
                    <img src="{{asset('storage/company-logos/'.$company->logo)}}" width="100" height="100" alt="">
                @endforeach
                <ul style="list-style: none;">
                    <li><h4><b>{{$job->title}}</b></h4></li>
                    <li>Company Name:<b> {{$job->user->name}}</b> </li>
                    <li>Category: <b> {{$job->category->name}}</b> </li>
                    <li>Employment Status: <b>{{$job->employment_status}}</b></li>
                </ul>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <hr>
            <div class="section mb-3">
                <h5>Job Requirements</h5>
                <ul>
                    <li>{{$job->requirement}}</li>
                </ul>
            </div>
            <div class="section mb-3">
                <h5>Working Hour</h5>
                <ul>
                    <li>{{$job->working_hour}}</li>
                </ul>
            </div>
            <div class="section mb-3">
                <h5>Salary</h5>
                <ul>
                    <li>{{$job->salary}} MMK</li>
                </ul>
            </div>
            <div class="section mb-3">
                <h5>Working Address</h5>
                <ul>
                    <li>{{$job->address}}</li>
                </ul>
            </div>
            <div class="section mb-3">
                <h5>Contact Information</h5>
                <ul>
                    <li>{{$job->contact_information}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
