@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('admin.companies.search') }}" method="get" class="form-inline float-right">
                    @csrf
                    <div class="input-group">
                        <input name="search_data" class="form-control" type="search" placeholder="Search" aria-label="Search" value="{{ isset($searchData) ? $searchData : '' }}">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <h4>All Companies</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{$message}}
                        </div>
                    @endif
                    <table class="table table-bordered bg-white text-center">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Type</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Active</th>
                                <th>Jobs</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->company_type}}</td>
                                    <td>{{$company->phone_no}}</td>
                                    <td>{{$company->address}}</td>
                                    <td>
                                        @foreach ($company->users as $user)
                                            <form action="{{ route('admin.users.active', $user->id) }}" method="post">
                                                @csrf
                                                
                                                    <input type="checkbox" name="active_status" id="" onchange="this.form.submit()" {{$user->active_status == 1 ? 'checked' : ''}}>
                                                    </div>
                                            </form>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.companies.jobs', $company->id) }}" class="btn btn-outline-success">View Jobs</a>
                                    </td>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.companies.destroy', $company->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            
                                            <a href="{{ route('admin.companies.show', $company->id) }}"  class="btn btn-info m-1" title="Detail" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@endsection
