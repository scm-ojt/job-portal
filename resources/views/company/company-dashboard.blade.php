@extends('company.company-layout.master')

@section('company-content')
<div class="container border border-primary p-3 clearFix">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-start">
                <img src="{{asset('images/telenor.jfif')}}" alt="" class="rounded img-thumbnail">
                <ul style="list-style: none;">
                    <li><h2>{{Auth::user()->name}}</h2></li>
                    <li>Company Type: IT/Communication</li>
                    <li>No of Employee : 10</li>
                    <li><a href="{{url('/company/1/edit')}}" class="btn btn-primary mt-3">Edit Profile</a></li>
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
</div>
@endsection
