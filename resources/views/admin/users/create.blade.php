@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Create User</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/users')}}" method="post" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror">
							@error('name')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>

                        <div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" >
							@error('email')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="">Password</label>
							<input type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror" >
							@error('password')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="">Confirm Password</label>
							<input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" >
						</div>

                        <div class="form-group">
							<label for="">Role</label>
							<select name="role_id" id="" class="form-control @error('role_id') is-invalid @enderror">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
							@error('role_id')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="">Photo</label>
							<input type="file" name="photo" id=""  class="form-control-file @error('photo') is-invalid @enderror">
							@error('photo')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-success">
							<a href="{{url('admin/users')}}" class="btn btn-secondary float-right">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
