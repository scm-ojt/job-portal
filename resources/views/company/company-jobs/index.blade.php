@extends('company.company-layout.master')

@section('company-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('jobs.create')}}" class="px-5 py-2 btn btn-primary float-right">Post Job</a>
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Approve</th>
                                <th>Category</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Contact Information</th>
                                <th>Employment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($company->jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->company->name}}</td>
                                    <td>
                                        @if($job->approve_status == 0)
                                            <span class="badge badge-primary">Waiting Approve</span>
                                        @else
                                            <span class="badge badge-primary">Approved</span>
                                        @endif
                                    </td>
                                    <td>{{$job->category->name}}</td>
                                    <td>{{number_format($job->salary)}}MMK</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>{{$job->contact_information}}</td>
                                    <td>{{$job->employment_status}}</td>
                                    <td>
                                        <form action="{{route('jobs.destroy', $job->id)}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('jobs.show', $job->id) }}"  class="btn btn-info" title="Detail" data-toggle="tooltip"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('jobs.edit', $job->id) }}"  class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="fa fa-pen"></i></a>
                                            <button type="submit" class="mt-1 btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt" style=" color: #fff;"></i></button>

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
