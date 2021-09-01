@extends('admin.admin-layout.master')

@section('admin-content')
<div class="container">
    <input type="hidden" value="{{$companyArr[1]}}" id="jan">
    <input type="hidden" value="{{$companyArr[2]}}" id="feb">
    <input type="hidden" value="{{$companyArr[3]}}" id="march">
    <input type="hidden" value="{{$companyArr[4]}}" id="april">
    <input type="hidden" value="{{$companyArr[5]}}" id="may">
    <input type="hidden" value="{{$companyArr[6]}}" id="june">
    <input type="hidden" value="{{$companyArr[7]}}" id="july">
    <input type="hidden" value="{{$companyArr[8]}}" id="aug">
    <input type="hidden" value="{{$companyArr[9]}}" id="sep">
    <input type="hidden" value="{{$companyArr[10]}}" id="oct">
    <input type="hidden" value="{{$companyArr[11]}}" id="nov">
    <input type="hidden" value="{{$companyArr[12]}}" id="dec">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <h4>Total companies in a month</h4>
            <canvas id="company" width="100%"></canvas>
        </div>
    </div>
    <input type="hidden" value="{{$jobArr[1]}}" id="janJob">
    <input type="hidden" value="{{$jobArr[2]}}" id="febJob">
    <input type="hidden" value="{{$jobArr[3]}}" id="marchJob">
    <input type="hidden" value="{{$jobArr[4]}}" id="aprilJob">
    <input type="hidden" value="{{$jobArr[5]}}" id="mayJob">
    <input type="hidden" value="{{$jobArr[6]}}" id="juneJob">
    <input type="hidden" value="{{$jobArr[7]}}" id="julyJob">
    <input type="hidden" value="{{$jobArr[8]}}" id="augJob">
    <input type="hidden" value="{{$jobArr[9]}}" id="sepJob">
    <input type="hidden" value="{{$jobArr[10]}}" id="octJob">
    <input type="hidden" value="{{$jobArr[11]}}" id="novJob">
    <input type="hidden" value="{{$jobArr[12]}}" id="decJob">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h4>Total jobs in a month</h4>
            <canvas id="job" width="100%"></canvas>
        </div>
    </div>
</div>
  
@endsection
