@extends('frontend.frontend-layout.master')
@section('frontend-content')

    
        <img src="{{asset('images/banner.jpg')}}" alt="" style="width:100%;" >
    
    <div class="container py-5">
        <div class="section mb-5">
            <div class="row mt-3">
                <div class="col-md-8">
                    
                    <h3 class="text-center">
                        <i class="fa fa-star fa-xs" style="color: #F28602"></i>
                        <i class="fa fa-star fa-xs" style="color: #F28602"></i>
                        Top Jobs
                        <i class="fa fa-star fa-xs" style="color: #F28602"></i>
                        <i class="fa fa-star fa-xs" style="color: #F28602"></i>
                    </h3>
                
                @foreach($jobs as $job)
                    <div class="card py-3 my-3" style="background-color: #EAEAF1">
                        <div class="row px-3">
                                @if($job->company->logo)
                                    <img src="{{asset('storage/company-logos/'.$job->company->logo)}}" alt="" class="col-md-2" style="width:100px; height:70px;">
                                @else
                                    <img src="{{asset('images/default-company-logo.png')}}" alt="" class="col-md-2" style="width:100px; height:70px;">
                                @endif
                           
                            <div class="col-md-4">
                                <a href="{{url('jobs/'.$job->id)}}"><h5 class="font-weight-bold" style="color: #3490DC">{{$job->title}}</h5></a>
                                <a href="{{url('companies/'.$job->company->id)}}"><span>{{$job->company->name? $job->company->name : ''}}</span></a>
                                
                            </div>
                            <div class="col-md-4">
                                <h5 class="font-weight-bold">{{$job->address}}</h5>
                            </div>
                            <div class="col-md-2">
                                <h5 class="font-weight-bold">{{$job->employment_status}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row justify-content-center">{{$jobs->appends(['companies' => $companies->currentPage()])->links()}}</div>
                    <div class="mt-5">
                        <h3>Companies</h3>
                        <div class="row mt-3">
                            @foreach($companies as $company)
                                <div class="col-md-3 my-3">
                                    <div class="card p-3 shadow-md border">
                                        @if($company->logo)
                                        <a href="{{url('/companies/'.$company->id)}}"><img src="{{asset('storage/company-logos/'.$company->logo)}}" alt="" class="rounded" width="125px" height="120px"></a>
                                        @else
                                        <a href="{{url('/companies/'.$company->id)}}"><img src="{{asset('images/default-company-logo.png')}}" alt="" class="rounded" width="125px" height="120px"></a>
                                        @endif
                                         
                                        <a href="{{url('/companies/'.$company->id)}}"><h5 class="font-weight-bold mt-3 text-center" style="color: #3490DC">{{$company->name}}</h5></a>
                                    </div>
                                </div>
                            @endforeach   
                        </div>
                        <div class="row justify-content-center">{{$companies->appends(['jobs' => $jobs->currentPage()])->links()}}</div> 
                    </div>
                </div>

                <div class="col-md-4">
                    <h3 class="text-center"> Categories </h3>
                    <div class="card shadow-md border mt-3" >
                        
                        <ul class="list-group list-group-flush px-4">
                            @foreach($categories as $key => $category)
                            <li class="list-group-item list-group-item-action">
                                <a href="{{url('/categories/'.$category->id)}}" >
                                <div class="row">
                                    <img src="{{asset('storage/category-images/'.$category->image)}}" alt="" class="col-md-3 rounded" >
                                    <h5 class="font-weight-bold col-md-9" style="color: #3490DC">{{$category->name}}</h5>
                                </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                         
                    </div>   
                </div>
                
            </div>
                
        </div>
        
        
    </div>
@endsection