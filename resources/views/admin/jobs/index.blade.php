@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{$message}}
                        </div>
                    @endif
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>Job Type</th>
                                <th>Employment Status</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
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
                                           {{$job->user->name? $job->user->name : ''}}
                                        </span>
                                    </td>
                                <td>{{$job->category->name? $job->category->name : ''}}</td>
                                    <td>{{$job->employment_status}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>
                                        <form action="{{ route('admin.jobs.approve', $job->id) }}" method="post">
                                            @csrf

                                                <input type="hidden" name="job_id" value="{{$job->id}}">
                                                <input type="checkbox" class="ml-3" name="approve_status" id="" onchange="this.form.submit()" {{$job->approve_status == 1 ? 'checked' : ''}}>
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="post">
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
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
@endsection
