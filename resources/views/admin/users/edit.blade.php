@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Edit User</h4>
				</div>
				<div class="card-body">
					<form action="{{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('put')
						
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}">
							@error('name')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" readonly value="{{$user->email}}">
							@error('email')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Role</label>
							<input type="text" name="role_name" id="" class="form-control" readonly value="{{$user->role->name}}">
							<input type="hidden" name="role_id" value="{{$user->role_id}}">
							@error('role_id')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							@if($user->photo)
							<img src="{{asset('storage/user-photos/'.$user->photo)}}" alt="" width="100" height="100" class="mb-2 ml-3" id="preview-img">
							@else
							<img src="{{asset('images/user.png')}}" alt="" width="100" height="100" class="mb-2 ml-3" id="preview-img">
							@endif
							<input type="file" name="photo" id="profile" class="form-control-file @error('photo') is-invalid @enderror">
							@error('photo')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Update</button>
							<a href="{{ route('admin.users.index') }}" class="btn btn-secondary float-right">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection