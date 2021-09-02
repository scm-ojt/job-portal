@extends('company.company-layout.master')

@section('company-content')
<div class="container border border-primary p-3 clearFix">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded img-thumbnail" style="width:25%">
                <ul style="list-style: none;">
                    <li><h2>{{Auth::user()->name}}</h2></li>
                    <li>Company Type: {{$company->company_type}}</li>
                    <li>No of Employee : {{$company->no_of_employee}}</li>
                    <li><a href="{{url('/company/'.Auth::user()->id.'/edit')}}" class="btn btn-primary btn-rounded btn-icon mt-3" title="Edit" data-toggle="tooltip"><i class="fa fa-eye">Edit Profile</i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h4>Histroy</h4>
            <p>
               {{$company->history}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Description</h4>
            <p>
                {{$company->description}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Address</h4>
            <p>
                {{$company->address}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Contact Information</h4>
            <p>
                {{$company->contact_information}}
            </p>
        </div>
    </div>
</div>
@endsection
