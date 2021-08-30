@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{url('admin/users/create')}}" class="btn btn-primary float-right">Create User</a>
                <h4>All Users</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            <p>{{$message}}</p>
                        </div>
                    @endif
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
                                        @if($user->photo)
                                            <img src="{{asset('storage/user-photos/'.$user->photo)}}" alt="User Photo" style="width: 100px;  height: 100px">
                                        @else
                                        <form action="{{url('admin/users/upload-photo/'.$user->id)}}" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="my-dropzone">
                                            @csrf
                                            @method('put')

                                        </form>
                                        @endif
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

                                            <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-warning m-1">Edit</a>
                                            <input type="submit" value="Del" class="btn btn-danger m-1">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
