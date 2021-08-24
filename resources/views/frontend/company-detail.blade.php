@extends('frontend.frontend-layout.master')

@section('frontend-content')
<div class="bg-primary p-5">
    <h3 class="text-center text-uppercase text-white">Company Detail</h3>
</div>
<div class="container py-5 p-3 clearFix">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                <img src="{{asset('images/telenor.jfif')}}" alt="" class="rounded img-thumbnail">
                <ul style="list-style: none;">
                    <li><h2>Company Name</h2></li>
                    <li>Company Type: IT/Communication</li>
                    <li>No of Employee : 10</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h4>Histroy</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo. <br><br>
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo. <br><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Description</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium. Maxime consectetur natus tempora quas quis itaque vero minima nemo.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Address</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam corrupti, vel aliquid hic animi porro aperiam eaque ea nemo laudantium.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Contact Information</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Company's Jobs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Type</th>
                                    <th>Salary</th>
                                    <th>Working Hour</th>
                                    <th>Contact Information</th>
                                    <th>Requirement</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Job Title</td>
                                    <td>Job Type</td>
                                    <td>Salary</td>
                                    <td>Working Hour</td>
                                    <td>Contact Information</td>
                                    <td>Requirement</td>
                                    <td>
                                       <a href="" class="btn btn-outline-primary">View Job</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Job Title</td>
                                    <td>Job Type</td>
                                    <td>Salary</td>
                                    <td>Working Hour</td>
                                    <td>Contact Information</td>
                                    <td>Requirement</td>
                                    <td>
                                       <a href="" class="btn btn-outline-primary">View Job</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Job Title</td>
                                    <td>Job Type</td>
                                    <td>Salary</td>
                                    <td>Working Hour</td>
                                    <td>Contact Information</td>
                                    <td>Requirement</td>
                                    <td>
                                       <a href="" class="btn btn-outline-primary">View Job</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
