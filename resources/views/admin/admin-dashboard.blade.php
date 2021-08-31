@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <h4>Total company in a year</h4>
            <canvas id="company" width="100%"></canvas>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h4>Total jobs in a year</h4>
            <canvas id="job" width="100%"></canvas>
        </div>
    </div>
</div>
  
@endsection
