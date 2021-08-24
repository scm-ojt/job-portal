@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Contact Information</th>
                                <th>Requirement</th>
                                <th>Approve</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Job Title</td>
                                <td>
                                    <span class="badge badge-success">Company Name</span>
                                </td>
                                <td>Job Type</td>
                                <td>Salary</td>
                                <td>Working Hour</td>
                                <td>Contact Information</td>
                                <td>Requirement</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Approve</a>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        @csrf

                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
