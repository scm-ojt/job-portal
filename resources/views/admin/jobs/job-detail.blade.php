@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="card p-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.jobs.index') }}" class="btn btn-outline-secondary float-right mr-5"><i
                            class="fa fa-arrow-circle-left mr-1"></i>Back</a>
                    <div class="d-flex justify-content-start">
                        @if ($job->company->logo)
                            <img src="{{ asset('storage/company-logos/' . $job->company->logo) }}" width="100" height="100"
                                alt="company-logo" class="rounded img-thumbnail">
                        @else
                            <img src="{{ asset('images/company.png') }}" width="100" height="100" alt="company-logo"
                                class="rounded img-thumbnail">
                        @endif
                        <ul style="list-style: none;">
                            <li>
                                <h4><b>{{ $job->title }}</b></h4>
                            </li>
                            <li>Company Name:<b> {{ $job->company->name }}</b> </li>
                            <li>Category: <b> {{ $job->category->name }}</b> </li>
                            <li>Employment Status: <b>{{ $job->employment_status }}</b></li>
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
                            <li>{{ $job->requirement }}</li>
                        </ul>
                    </div>
                    <div class="section mb-3">
                        <h5>Working Hour</h5>
                        <ul>
                            <li>{{ $job->working_hour }}</li>
                        </ul>
                    </div>
                    <div class="section mb-3">
                        <h5>Salary</h5>
                        <ul>
                            <li>{{ number_format($job->salary) }} MMK</li>
                        </ul>
                    </div>
                    <div class="section mb-3">
                        <h5>Working Address</h5>
                        <ul>
                            <li>{{ $job->address }}</li>
                        </ul>
                    </div>
                    <div class="section mb-3">
                        <h5>Contact Information</h5>
                        <ul>
                            <li>{{ $job->contact_information }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
