@extends('frontend.frontend-layout.master')
@section('frontend-content')

    <div class="bg-primary p-5">
        <h3 class="text-center text-uppercase text-white">Contact Us</h3>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-secondary shadow-sm">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Phone No</label>
                                <input type="text" name="" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                               <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
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