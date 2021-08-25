@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>New Category</h4>
				</div>
				<div class="card-body">
					<form action="{{url('admin/categories')}}" method="post">
						@csrf

						<div class="form-group">
							<label for="">Job Category</label>
							<input type="text" name="name" id="" class="form-control">
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
