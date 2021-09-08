@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container-fluid">
    <div class="card p-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary float-right mr-5"><i class="fa fa-arrow-circle-left mr-1"></i>Back</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-start">
                            <ul style="list-style: none;">
                                <li><h2>{{$contact->name}}</h2></li>
                                <li>Email: {{$contact->email}}</li>
                                <li>Phone Number: {{$contact->phone_no}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Message</h4>
                        <p>
                            {{$contact->message}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
