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
					<form action="" method="post">
						@csrf
						
                        <div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="name" id="" class="form-control" placeholder="Enter company name">
						</div>

                        <div class="form-group">
							<label for="">Company Logo</label>
							<input type="file" name="logo" id="" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Company Type</label>
							<select name="" id="" class="form-control">
                                <option value="">Select Company Type</option>
                                <option value="">IT/Communication</option>
                                <option value="">Building</option>
                            </select>
						</div>

                        <div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" id="" class="form-control" placeholder="Enter email">
						</div>
						
                        <div class="form-group">
							<label for="">Phone No</label>
							<input type="text" name="phone_no" id="" class="form-control" placeholder="Enter phone no">
						</div>

                        <div class="form-group">
							<label for="">No of Employee</label>
							<input type="number" name="no_of_employee" id="" class="form-control" placeholder="Enter number of employee">
						</div>

                        <div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" id="" class="form-control" placeholder="Enter address">
						</div>

                        <div class="form-group">
							<label for="">Company History</label>
							<textarea name="history" id="" cols="30" rows="5" class="form-control"></textarea>
						</div>

                        <div class="form-group">
							<label for="">Company Description</label>
							<textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<input type="submit" value="Update Profile" class="btn btn-primary">
							<input type="submit" value="Reset" class="btn btn-dark">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
