@extends('frontend.frontend-layout.master')
@section('frontend-content')

    <div class="bg-primary p-5">
        <h3 class="text-center text-uppercase text-white">Banner</h3>
    </div>
    <div class="container py-5">
        <div class="section mb-5">
            <h3>All Companies</h3>
            <div class="row mt-3 mb-5">
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <a href="{{url('/companies/1')}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <a href="{{url('/companies/1')}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        <img src="{{asset('images/wave_money.png')}}" alt="" class="rounded" height="120">
                        <h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">Company Name</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection