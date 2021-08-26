@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Edit Category</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/categories/'.$category->id)}}" method="post">
						@csrf
						@method('put')

						<div class="form-group">
							<label for="">Job Category</label>
							<input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}">
							@error('name')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-success">
							<input type="reset" value="Reset" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
