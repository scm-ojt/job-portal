@extends('company.company-layout.master')

@section('company-content')
<div class="container border border-primary p-3 clearFix">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                @if($company->logo)
                    <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" width="200" height="150">
                @else
                    <img src="{{asset('images/company.png')}}" alt="" width="200" height="150">
                @endif
                <ul style="list-style: none;">
                    <li><h2>{{$company->name}}</h2></li>
                    <li>Company Type: {{$company->company_type}}</li>
                    <li>No of Employee : {{$company->no_of_employee}}</li>
                    <li><a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary mt-3">Edit Profile</a></li>
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
