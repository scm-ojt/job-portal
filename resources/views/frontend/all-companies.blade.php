@extends('frontend.frontend-layout.master')
@section('frontend-content')

    
<img src="images/job-main-banner.jpg" alt="" style="width:1349px; ">

    <div class="container py-5">
        <div class="section mb-5">
            <h3>All Companies</h3>
            <div class="row mt-3 mb-5">
                @foreach($companies as $company)
                <div class="col-md-3">
                    <div class="card p-3 shadow-md border border-dark">
            
                            <img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded" height="120"> 
    
                        <a href="{{url('/companies/'.$company->id)}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">
                            @foreach($company->users as $key => $user)
                            {{$user->name}}
                        @endforeach</h5></a>
                    </div>
                </div>
                @endforeach   
            </div>
            {{ $companies->links() }}   
        </div>
    </div>
@endsection