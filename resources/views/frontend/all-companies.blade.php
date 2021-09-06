@extends('frontend.frontend-layout.master')
@section('frontend-content')

    
<div style="position:relative">
    <img src="{{ asset('images/bg.jpg') }}" alt="" style="width:100%; height: 350px">
</div>
<div class="container">
    <div style="position: absolute; top:160px; left: 250px; color: #0BA5A9;">
        <h1 style="color: #0BA5A9;">All Companies</h1>
        <a href="{{url('/')}}" class="" style="color: #0BA5A9;">HOME</a> >
        <a href="{{url('/companies')}}" class="" style="color: #0BA5A9;">ALL COMPANIES</a>
    </div>
</div>
    <div class="container py-5">
        <div class="section mb-5">
            <h3>All Companies</h3>
            <div class="row mt-3 mb-5">
                @foreach($companies as $company)
                
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
                        @if($company->logo)
                            <a href="{{url('/companies/'.$company->id)}}">
                                <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded pl-3" height="120" width="200">
                            </a>
                        @else
                            <a href="{{url('/companies/'.$company->id)}}">
                                <img src="{{asset('images/default-company-logo.png')}}" alt="" class="rounded pl-3" height="120" width="200">
                            </a>
                        @endif    
                            <a href="{{url('/companies/'.$company->id)}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC"> {{$company->name}}</h5></a>        
                    </div>
                </div>
                
                @endforeach   
            </div>
            <div class="row justify-content-center">{{ $companies->links() }}</div>  
        </div>
    </div>
@endsection