@extends('frontend.frontend-layout.master')
@section('frontend-content')

    
<div style="position:relative">
    <img src="{{ asset('images/common_bnr.jpg') }}" alt="" style="width:100%; height: 300px">
</div>
<div class="container">
    <div style="position: absolute; top:150px; left: 150px" class="text-white">
        <h1>All Companies</h1>
        <a href="{{url('/')}}" class="text-white">HOME</a> >
        <a href="{{url('/companies')}}" class="text-white">ALL COMPANIES</a>
    </div>
</div>
    <div class="container py-5">
        <div class="section mb-5">
            <h3>All Companies</h3>
            <div class="row mt-3 mb-5">
                @foreach($companies as $company)
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
            
                            <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded" height="120"> 
    
                          
                            @foreach($company->users as $key => $user)
                            <a href="{{url('/companies/'.$user->id)}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC"> {{$user->name}}</h5></a>
                            @endforeach
                    </div>
                </div>
                @endforeach   
            </div>
            {{ $companies->links() }}  
        </div>
    </div>
@endsection