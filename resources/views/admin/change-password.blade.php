@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			@if($message = Session::get('success'))
			<div class="alert alert-info">
				{{$message}}
			</div>
			@endif
			<div class="card">
				<div class="card-header">
					<a href="{{ route('admin.edit', $user->id) }}" class="btn btn-outline-secondary float-right"><i class="fa fa-arrow-circle-left mr-2"></i>Back</a>
					<h4>Change Password</h4> 
				</div>
				<div class="card-body">
					<form action="{{ route('admin.password.update', $user->id) }}" method="POST">
						@csrf
						
						<div class="form-group">
							<label for="">Old Password</label>
							<input type="password" name="old_password" placeholder="Enter old password" id="" class="form-control @error('old_password') is-invalid @enderror">
							@error('old_password')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">New Password</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter new password">
							@error('password')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter confirm password">
							@error('confirm_password')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Change</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection