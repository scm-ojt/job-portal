@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{url('admin/users/create')}}" class="btn btn-primary float-right">Create User</a>
                <h4>All Users</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <img src="{{asset('storage/user-photos/'.$user->photo)}}" alt="User Photo" style="width: 100px;  height: 100px">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <span class="badge badge-primary">{{$user->role->name}}</span>
                                    </td>
                                    <td>
                                        <form action="{{url('admin/users/active')}}" method="post">
                                            @csrf

                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <input type="checkbox" class="form-control" name="active_status" id="" onchange="this.form.submit()" {{$user->active_status == 1 ? 'checked' : ''}}>
                                            
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{url('admin/users/'.$user->id)}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-warning">Edit</a>
                                            <input type="submit" value="Del" class="btn btn-danger">
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
