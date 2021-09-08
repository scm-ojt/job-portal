@extends('frontend.frontend-layout.master')
@section('frontend-content')

<div style="position:relative">
  <img src="{{ asset('images/bg.jpg') }}" alt="" style="width:100%; height: 350px">
</div>
<div class="container">
  <div style="position: absolute; top:160px; left: 250px; color: #0BA5A9;" >
    <h1 style="color: #0BA5A9;">About Us</h1>
    <a href="{{url('/')}}" class="" style="color: #0BA5A9;">HOME</a> >
    <a href="{{url('about-us')}}" class="" style="color: #0BA5A9;">ABOUT US</a>
  </div>
</div> 
<div class="container py-5">
  <div class="row mb-4">
    <div class="col-sm-6 offset-sm-3">
      <div class="card" style="border-color:#196F92">
        <div class="card-body" style="font-size: 15px;">
          <h5 class="card-title text-center font-weight-bold" style="color:#196F92">Our Vision</h5>
          <p class="card-text font-italic" style="color:#196F92">To be a leading Japan IT company in Myanmar.To build a solid trust with our customers and partners.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-sm-6 ">
      <div class="card" style="border-color:#196F92">
        <div class="card-body" style="font-size: 15px;">
          <h5 class="card-title text-center font-weight-bold" style="color:#196F92">Our Mission</h5>
          <p class="card-text font-italic" style="color:#196F92">To build strong teams with excellent IT engineers. 
            To provide high-quality and cost-effective solutions.  To develop IT products beneficial to our society. 
            To build a solid trust with our customers and partners. 
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" style="border-color:#196F92">
        <div class="card-body" style="font-size: 15px;">
          <h5 class="card-title text-center font-weight-bold" style="color:#196F92">Our Value</h5>
          <p class="card-text font-italic" style="color:#196F92">We create comfortable work environment for every religion and ethnic background.   
            We respect diversity and make it our strength.  To develop IT products beneficial to our society. 
            
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection