@extends('frontend.frontend-layout.master')
@section('frontend-content')

<div style="position:relative">
    <img src="{{ asset('images/bg.jpg') }}" alt="" style="width:100%; height: 350px">
</div>
<div class="container">
    <div style="position: absolute; top:160px; left: 250px; color: #0BA5A9;" >
        <h1 style="color: #0BA5A9;">Contact Us</h1>
        <a href="{{url('/')}}" style="color: #0BA5A9;">HOME</a> >
        <a href="{{url('contact-us')}}" style="color: #0BA5A9;">CONTACT US</a>
    </div>
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
                                <input type="text" name="name" class="form-control @error('name') is-invalid
                                    @enderror" id="" >
                                    @error('name')
                                        <span class="text-danger text-bold">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email')
                                    is-invalid @enderror" id="" >
                                    @error('email')
                                        <span class="text-danger text-bold">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Phone No</label>
                                <input type="text" name="phone_no" class="form-control @error('phone_no')
                                is-invalid @enderror" id="">
                                @error('phone_no')
                                 <span class="text-danger text-bold">{{ $message }}</span>   
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                               <textarea name="message" id="" cols="30" rows="5" class="form-control @error('message')
                               is-invalid @enderror"></textarea>
                               @error('message')
                                 <span class="text-danger text-bold">{{ $message }}</span>  
                               @enderror
                            </div>
                            <div class="form-group ml-3">
                                <input type="submit" value="Submit" class="btn" style="background-color: #0BA5A9; color:white;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection