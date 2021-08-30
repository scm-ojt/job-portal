@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Companies</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Type</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Contact Information</th>
                                <th>Histroy</th>
                                <th>No of Employee</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>
                                        <img src="{{asset('images/'.$company->logo)}}" alt="">
                                    </td>
                                    <td>
                                        @foreach ($company->users as $user)
                                            {{$user->name}}
                                        @endforeach
                                    </td>
                                    <td>{{$company->company_type}}</td>
                                    <td>{{$company->phone_no}}</td>
                                    <td>{{$company->address}}</td>
                                    <td>{{$company->contact_information}}</td>
                                    <td>{{$company->history}}</td>
                                    <td>{{$company->no_of_employee}}</td>
                                    <td>
                                        <form action="{{url('admin/users/active')}}" method="post">
                                            @csrf

                                            @foreach ($company->users as $user)
                                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                                <input type="checkbox" class="form-control" name="active_status" id="" onchange="this.form.submit()" {{$user->active_status == 1 ? 'checked' : ''}}>
                                                </div>
                                            @endforeach
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{url('admin/companies/'.$company->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            
                                            <input type="submit" value="Delete" class="btn btn-danger">
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
