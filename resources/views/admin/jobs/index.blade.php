@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>Job Type</th>
                                <th>Employment Status</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Contact Information</th>
                                <th>Requirement</th>
                                <th>Approve</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>
                                        <span class="badge badge-success">
                                           ABC Company
                                        </span>
                                    </td>
                                <td>{{$job->category->name? $job->category->name : ''}}</td>
                                    <td>{{$job->employment_status}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>{{$job->contact_information}}</td>
                                    <td>{{$job->requirement}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Approve</a>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf

                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
