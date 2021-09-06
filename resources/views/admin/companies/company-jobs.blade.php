@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{ route('admin.companies') }}" class="btn btn-primary float-right"><i class="fa fa-arrow-circle-left mr-1"></i>Back</a>
                <h4>{{$company->name}}'s Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered bg-white text-center">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Type</th>
                                <th>Employment Status</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Approve</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($company->jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->category->name? $job->category->name : ''}}</td>
                                    <td>{{$job->employment_status}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>
                                        <form action="{{ route('admin.jobs.approve', $job->id) }}" method="post">
                                            @csrf
                                            
                                                <input type="checkbox" name="approve_status" id="" onchange="this.form.submit()" {{$job->approve_status == 1 ? 'checked' : ''}}>
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="post" id="delete">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('admin.jobs.show', $job->id) }}"  class="btn btn-info" title="Detail" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt"></i></button>
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
