@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Edit User</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
						@csrf
                        @method('put')

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" id="" class="form-control" value="{{$user->name}}">
						</div>

                        <div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" id="" class="form-control" readonly value="{{$user->email}}">
						</div>
						
                        <div class="form-group">
							<label for="">Password</label>
							<input type="password" name="password" id="" class="form-control" value="{{$user->password}}">
						</div>

                        <div class="form-group">
							<label for="">Role</label>
							<select name="role_id" id="" class="form-control">
                                <option value="{{$user->role_id}}">{{$user->role->name}}</option>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input type="file" name="photo" id="" class="form-control">
						</div>

						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-success">
							<input type="submit" value="Reset" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
