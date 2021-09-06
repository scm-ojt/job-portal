@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('admin.jobs.search') }}" method="get" class="form-inline float-right">
                    @csrf
                    <div class="input-group">
                        <input name="search_data" class="form-control" type="search" placeholder="Search" aria-label="Search" value="{{ isset($searchData) ? $searchData : '' }}">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
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
                                           {{$job->company->name? $job->company->name : ''}}
                                        </span>
                                    </td>
                                    <td>{{$job->category->name? $job->category->name : ''}}</td>
                                    <td>{{$job->employment_status}}</td>
                                    <td>{{ number_format($job->salary) }} MMK</td>
                                    <td>{{$job->working_hour}}</td>
                                    <td>
                                        <form action="{{ route('admin.jobs.approve', $job->id) }}" method="post">
                                            @csrf

                                                <input type="checkbox" class="ml-3" name="approve_status" id="" onchange="this.form.submit()" {{$job->approve_status == 1 ? 'checked' : ''}}>
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('admin.jobs.show', $job->id) }}"  class="btn btn-info m-1" title="Detail" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt"></i></button>
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
