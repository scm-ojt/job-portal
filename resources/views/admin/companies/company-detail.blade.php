@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{url('admin/companies')}}" class="btn btn-primary float-right mr-5"><i class="fa fa-arrow-circle-left mr-1"></i>Back</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-start">
                            <img src="{{asset('storage/company-logos/'.$company->logo)}}"   style="width:100px; height:100px;" alt="" class="rounded img-thumbnail">
                            <ul style="list-style: none;">
                                <li><h2>{{$company->name}}</h2></li>
                                <li>Company Type: {{$company->company_type}}</li>
                                <li>No of Employee : {{$company->no_of_employee}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
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
        </div>
    </div>
@endsection
