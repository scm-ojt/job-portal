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
					<form action="" method="post">
						@csrf
						
                        <div class="form-group">
							<label for="">Job Title</label>
							<input type="text" name="title" id="" class="form-control" placeholder="Enter Job Title">
						</div>

						<div class="form-group">
							<label for="">Job Category</label>
							<select name="" id="" class="form-control">
                                <option value="">Select Job Type</option>
                                <option value="">IT/Communication</option>
                                <option value="">Web Designer</option>
                            </select>
						</div>

                        <div class="form-group">
							<label for="">Salary</label>
							<input type="text" name="salary" id="" class="form-control" placeholder="Enter salary">
						</div>
						
                        <div class="form-group">
							<label for="">Working Hour</label>
							<input type="text" name="working_hour" id="" class="form-control" placeholder="Enter working hour">
						</div>

                        <div class="form-group">
							<label for="">Contact Information</label>
							<input type="text" name="contact_information" id="" class="form-control" placeholder="Enter contact information">
						</div>

                        <div class="form-group">
							<label for="">Address</label>
							<input type="text" name="address" id="" class="form-control" placeholder="Enter address">
						</div>

                        <div class="form-group">
							<label for="">Job Requirements</label>
							<textarea name="requirement" id="" cols="30" rows="5" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<input type="submit" value="Update Job" class="btn btn-success">
							<input type="submit" value="Reset" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
