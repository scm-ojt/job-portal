@extends('frontend.frontend-layout.master')

@section('frontend-content')

    <img src="{{ asset('images/bg.jpg') }}" alt="" style="width:100%; height:350px;">

<div class="container py-5 p-3 clearFix" style="font-size: 15px;">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                @if($company->logo)
                    <img src="{{asset('storage/company-logos/'.$company->logo)}}"   style="width:100px; height:100px;" alt="" class="rounded img-thumbnail">
                @endif
                <ul style="list-style: none;">
                    <li><h2>{{$user->name}}</h2></li>
                    <li>Company Type: {{$company->company_type}}</li>
                    <li>No of Employee : {{$company->no_of_employee}}</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mb-2">
        <div class="col-md-12">
            <h4>Histroy</h4>
            <p>
               {{$company->history}}
            </p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <h4>Description</h4>
            <p>
                {{$company->description}}
            </p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <h4>Address</h4>
            <p>
                {{$company->address}}
            </p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <h4>Contact Information</h4>
            <p>
                {{$company->contact_information}}
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#0BA5A9">
                    <h4 class="text-white">Company's Jobs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Jobs Category</th>
                                    <th>Salary</th>
                                    <th>Working Hour</th>
                                    <th>Contact Information</th>
                                    <th>Requirement</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($user->jobs as $job)
                                    <tr>
                                        <td>{{$job->title}}</td>
                                        <td>{{$job->category->name}}</td>
                                        <td>{{$job->salary}} MMK</td>
                                        <td>{{$job->working_hour}}</td>
                                        <td>{{$job->contact_information}}</td>
                                        <td>{{$job->requirement}}</td>
                                        <td>
                                        <a href="{{url('jobs/'.$job->id)}}" class="btn btn-outline-primary">View Job</a>
                                        </td>
                                    </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
