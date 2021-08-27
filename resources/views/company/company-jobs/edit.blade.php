@extends('company.company-layout.master')

@section('company-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Edit Job</h4>
				</div>
				<div class="card-body">
					<form action="{{url('company-jobs/'.$job->id)}}" method="post">
						@csrf
						@method('put')
						
            <div class="form-group">
				<label for="">Job Title</label>
				<input type="text" name="title" id="" class="form-control" placeholder="Enter Job Title" value="{{$job->title}}">
			</div>

			<div class="form-group">
				<label for="">Job Category</label>
				<select name="category_id" id="" class="form-control">
					<option value="{{$job->category_id}}">{{$job->category->name}}</option>
                	<option value="">Select Job Type</option>
                	@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
             	</select>
			</div>

            <div class="form-group">
				<label for="">Employment Status</label>
				<select name="employment_status" id="" class="form-control">
					<option value="{{$job->employment_status}}">{{$job->employment_status}}</option>
                	<option value="">Select Employment Status</option>
                	<option value="Full-Time">Full-Time</option>
                	<option value="Part-Time">Part-Time</option>
					<option value="Internship">Internship</option>
					<option value="Freelance">Freelance</option>
                </select>
			</div>

            <div class="form-group">
							<label for="">Salary</label>
							<input type="text" name="salary" id="" class="form-control" placeholder="Enter salary" value="{{$job->salary}}">
			</div>
						
            <div class="form-group">
							<label for="">Working Hour</label>
							<input type="text" name="working_hour" id="" class="form-control" placeholder="Enter working hour" value="{{$job->working_hour}}">
						</div>

            <div class="form-group">
							<label for="">Contact Information</label>
							<input type="text" name="contact_information" id="" class="form-control" placeholder="Enter contact information" value="{{$job->contact_information}}">
						</div>

            <div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" id="" class="form-control" placeholder="Enter address" value="{{$job->address}}">
						</div>

            <div class="form-group">
							<label for="">Job Requirements</label>
							<textarea name="requirement" id="" cols="30" rows="5" class="form-control">{{$job->requirement}}</textarea>
						</div>

						<div class="form-group">
							<input type="submit" value="Update Job" class="btn btn-success">
							<input type="reset" value="Reset" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
