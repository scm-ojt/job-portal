@extends('frontend.frontend-layout.master')
@section('frontend-content')

<img src="{{ asset('images/common_bnr.jpg') }}" alt="" style="width:100%; height: 300px">
<div class="carousel-caption text-left" style="padding-bottom: 400px">
    <h1>Contact Us</h1>
    <a href="{{url('/')}}" class="text-white">HOME</a> >
    <a href="{{url('contact-us')}}" class="text-white">CONTACT US</a>
</div> 
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-secondary shadow-sm">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{url('contact-us')}}" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Phone No</label>
                                <input type="text" name="phone_no" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                               <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <input type="reset" value="Reset" class="btn btn-secondary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection