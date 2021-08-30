@extends('frontend.frontend-layout.master')
@section('frontend-content')

<img src="{{ asset('images/common_bnr.jpg') }}" alt="" style="width:100%; height: 300px">
<div class="carousel-caption text-left" style="padding-bottom: 400px">
    <h1>About Us</h1>
    <a href="{{url('/')}}" class="text-white">HOME</a> >
    <a href="{{url('about-us')}}" class="text-white">ABOUT US</a>
</div> 
    <div class="container py-5">
        <div class="section">
            <h3>Vision</h3>
            <ul>
                To be a leading Japan IT company in Myanmar.
            </ul>
        </div>
        <div class="section">
            <h3>Mission</h3>
            <ul>
                To build strong teams with excellent IT engineers. <br>
                To provide high-quality and cost-effective solutions. <br>
                To develop IT products beneficial to our society. <br>
                To build a solid trust with our customers and partners. <br>
            </ul>
        </div>
        <div class="section">
            <h3>Value</h3>
            <ul>
                We respect diversity and make it our strength. <br>
                We create comfortable work environment for every religion and ethnic background. <br>
                We keep challenging to the latest IT technology. <br>
                We promise not only low cost but also high-quality products. <br>
            </ul>
        </div>
    </div>
@endsection