@extends('frontend.frontend-layout.master')
@section('frontend-content')

<div style="position:relative">
    <img src="{{ asset('images/common_bnr.jpg') }}" alt="" style="width:100%; height: 300px">
</div>
<div class="container">
    <div style="position: absolute; top:150px; left: 150px" class="text-white">
        <h1>About Us</h1>
        <a href="{{url('/')}}" class="text-white">HOME</a> >
        <a href="{{url('about-us')}}" class="text-white">ABOUT US</a>
    </div>
</div> 
    <div class="container py-5">
        <div class="section">
            <h3>Our Vision</h3>
            <ul>
               <li> To be a leading Japan IT company in Myanmar.</li>
            </ul>
        </div>
        <div class="section">
            <h3>Our Mission</h3>
            <ul>
                <li>To build strong teams with excellent IT engineers. </li>
                <li>To provide high-quality and cost-effective solutions. </li>
                <li>To develop IT products beneficial to our society. </li>
                <li>To build a solid trust with our customers and partners. </li>
            </ul>
        </div>
        <div class="section">
            <h3>Our Value</h3>
            <ul>
                <li>We create comfortable work environment for every religion and ethnic background.</li>
                <li>We respect diversity and make it our strength.</li> 
                <li>We keep challenging to the latest IT technology. </li>
                <li>We promise not only low cost but also high-quality products. </li>
            </ul>
        </div>
    </div>
@endsection