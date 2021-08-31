@extends('company.company-layout.master')

@section('company-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Post Job</h4>
				</div>
				<div class="card-body">
					<form action="{{url('company-jobs')}}" method="post">
						@csrf
						
						<div class="form-group">
							<label for="">Job Title</label>
							<input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Job Title">
							@error('title')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Job Category</label>
							<select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
								<option value="">Select Job Category</option>
								@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
							@error('category_id')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Employment Status</label>
							<select name="employment_status" id="" class="form-control @error('employment_status') is-invalid @enderror">
								<option value="">Select Employment Status</option>
								<option value="Full-Time">Full-Time</option>
								<option value="Part-Time">Part-Time</option>
								<option value="Internship">Internship</option>
								<option value="Freelance">Freelance</option>
							</select>
							@error('employment_status')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Salary</label>
							<input type="text" name="salary" id="" class="form-control @error('salary') is-invalid @enderror" placeholder="Enter salary">
							@error('salary')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Working Hour</label>
							<input type="text" name="working_hour" id="" class="form-control @error('working_hour') is-invalid @enderror" placeholder="Enter working hour">
							@error('working_hour')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Contact Information</label>
							<input type="text" name="contact_information" id="" class="form-control @error('contact_information') is-invalid @enderror" placeholder="Enter contact information">
							@error('contact_information')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" id="" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address">
							@error('address')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Job Requirements</label>
							<textarea name="requirement" id="" cols="30" rows="5" class="form-control @error('requirement') is-invalid @enderror"></textarea>
							@error('requirement')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<input type="submit" value="Post Job" class="btn btn-success">
							<input type="reset" value="Reset" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
