@extends('company.company-layout.master')

@section('company-content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h4>Company Profile Edit</h4>
				</div>
				<div class="card-body">
					<form action="{{url('company/'.$company->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('put')
						
						<div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" placeholder="Enter company name" value="{{Auth::user()->name}}">
							@error('name')
							 <span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
						
						<div class="form-group">
							<label for="">Company Logo</label>
							<input type="file" name="logo" id="" class="form-control @error('logo') is-invalid @enderror" value="{{$company->logo}}">
							@error('logo')
							<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
						</div>
					
					<div class="form-group">
						<label for="">Company Type</label>
						<select name="company_type" id="" class="form-control @error('company_type') is-invalid @enderror">
							<option value="{{$company->company_type}}">{{$company->company_type}}</option>
							<option value="">Select Company Type</option>
							<option value="IT/Communication">IT/Communication</option>
							<option value="Hospital">Hospital</option>
							<option value="Bank">Bank</option>
							<option value="Market & Store">Market & Store</option>
							<option value="Construction">Construction</option>
							<option value="Restaurant">Restaurant</option>
							<option value="Sales & Marketing">Sales & Marketing</option>
							<option value="Health & Beauty">Health & Beauty</option>
							<option value="Travel & Tourism">Travel & Tourism</option>
							<option value="Entertainment & Sports">Entertainment & Sports</option>
							<option value="Education">Education</option>
							<option value="Finance & Insurance">Finance & Insurance</option>
							<option value="Architecture & Design">Architecture & Design </option>
							<option value="Agriculture">Agriculture</option>
							<option value="Government">Government</option>
						</select>
							@error('company_type')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
					</div>
					
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" readonly value="{{Auth::user()->email}}">
						@error('logo')
							<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="">Phone No</label>
						<input type="text" name="phone_no" id="" class="form-control @error('phone_no') is-invalid @enderror" placeholder="Enter phone no" value="{{$company->phone_no}}">
							@error('phone_no')
								<span class="text-danger text-bold">{{ $message }}</span>
							@enderror
					</div>
					
					<div class="form-group">
						<label for="">No of Employee</label>
						<input type="number" name="no_of_employee" id="" class="form-control @error('no_of_employee') is-invalid @enderror" placeholder="Enter number of employee" value="{{$company->no_of_employee}}">
						@error('no_of_employee')
								<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" name="address" id="" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address" value="{{$company->address}}">
						@error('address')
								<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="">Company History</label>
						<textarea name="history" id="" cols="30" rows="5" class="form-control @error('history') is-invalid @enderror">{{$company->history}}</textarea>
						@error('history')
								<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="">Company Description</label>
						<textarea name="description" id="" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{$company->description}}</textarea>
						@error('description')
								<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<label for="">Contact Information</label>
						<textarea name="contact_information" id="" cols="30" rows="3" class="form-control @error('contact_information') is-invalid @enderror">{{$company->contact_information}}</textarea>
						@error('contact_information')
								<span class="text-danger text-bold">{{ $message }}</span>
						@enderror
					</div>
					
					<div class="form-group">
						<input type="submit" value="Update Profile" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-dark">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
