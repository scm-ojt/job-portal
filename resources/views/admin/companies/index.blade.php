@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                <th>Users</th>
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
                                        <form action="{{url('admin/users/active')}}" method="post">
                                            @csrf

                                            @foreach ($company->users as $user)
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <input type="checkbox" name="active_status" id="" onchange="this.form.submit()" {{$user->active_status == 1 ? 'checked' : ''}}>
                                                </div>
                                            @endforeach
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{url('admin/companies/'.$company->id.'/users')}}" class="btn btn-outline-primary">View Users</a>
                                    </td>
                                    <td>
                                        <a href="{{url('admin/companies/'.$company->id.'/jobs')}}" class="btn btn-outline-success">View Jobs</a>
                                    </td>
                                    </td>
                                    <td>
                                        <form action="{{url('admin/companies/'.$company->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            
                                            <a href="{{url('admin/companies/'.$company->id)}}"  class="btn btn-rounded btn-icon" title="Detail" data-toggle="tooltip" style="background-color: #0fcce6;"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger btn-rounded btn-icon" ><i class="fa fa-trash-alt" style=" color: #fff;"></i></button>
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
