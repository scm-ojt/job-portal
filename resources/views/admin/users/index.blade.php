@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Users</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{$message}}
                        </div>
                    @endif
                    <table class="table table-bordered bg-white text-center">
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
                                        <form action="{{ route('admin.uploadPhoto', $user->id) }}" method="post" enctype="multipart/form-data" class="dropzone dz-clickable" id="myDropzone">
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
                                        <form action="{{ route('admin.users.active') }}" method="post">
                                            @csrf

                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <input type="checkbox" name="active_status" id="" onchange="this.form.submit()" {{$user->active_status == 1 ? 'checked' : ''}}> <br>
                                            {{-- @if($user->active_status == true)
                                                <span class="badge badge-success"><i class="fa fa-user mr-1"></i> Active</span>
                                            @else
                                                <span class="badge badge-secondary"><i class="fa fa-ban mr-1"></i> Deactivate</span>
                                            @endif --}}
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('admin.users.edit', $user->id) }}"  class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="fa fa-pen"></i></a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt" style=" color: #fff;"></i></button>
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
