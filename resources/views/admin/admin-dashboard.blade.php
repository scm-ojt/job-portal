@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h4>Total companies in a month</h4>
                <canvas id="company" width="100%"></canvas>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4>Total jobs in a month</h4>
                <canvas id="job" width="100%"></canvas>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script>
        var companies = @json(array_values($companies));
        var jobs = @json(array_values($jobs));
    </script>

    <!-- chart js -->
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/chart.js') }}"></script>
@endsection
