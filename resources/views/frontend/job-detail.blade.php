@extends('frontend.frontend-layout.master')

@section('frontend-content')
<div class="bg-primary p-5">
    <h3 class="text-center text-uppercase text-white">{{$job->title}}</h3>
    <h5 class="text-center text-white">{{$job->category->name}}</h5>
    <h5 class="text-center text-white">{{$job->user->name}}</h5>
</div>
<div class="container py-5">
    <div class="section mb-5">
        <h3>Job Requirements</h3>
        <ul>
            <li>{{$job->requirement}}</li>
        </ul>
    </div>
    <div class="section mb-5">
        <h3>Working Hour</h3>
        <p>
            {{$job->working_hour}} hour
        </p>
    </div>
    <div class="section mb-5">
        <h3>Salary</h3>
        <p>
            * {{$job->salary}} MMK
        </p>
    </div>
</div>
@endsection