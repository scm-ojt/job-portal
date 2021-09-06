@extends('company.company-layout.master')

@section('company-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{url('company-jobs/create')}}" class="px-5 py-2 btn btn-primary float-right">Post Job</a>
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Job Aprrove</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Contact Information</th>
                                <th>Requirement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->user->name}}</td>
                                    <td>
                                        @if($job->approve_status == 0)
                                            <span class="badge badge-primary">Waiting Approve</span>
                                        @else
                                            <span class="badge badge-primary">Approved</span>
                                        @endif
                                    </td>
                                    <td>{{$job->category->name}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>{{$job->contact_information}}</td>
                                    <td>{{$job->requirement}}</td>
                                    <td>
                                        <form action="{{url('company-jobs/'.$job->id)}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{url('company-jobs/'.$job->id.'/edit')}}"  class="btn btn-rounded btn-icon" title="Edit" data-toggle="tooltip" style="background-color: #FFC107;"><i class="fa fa-pen">Edit</i></a>
                                            <button type="submit" class="btn btn-danger btn-rounded btn-icon" ><i class="fa fa-trash-alt" style=" color: #fff;">Delete</i></button>

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
