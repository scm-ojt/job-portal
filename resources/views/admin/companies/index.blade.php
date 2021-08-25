@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h4>All Companies</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered bg-white">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Type</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Contact Information</th>
                                <th>Histroy</th>
                                <th>No of Employee</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Logo</td>
                                <td>Company Name</td>
                                <td>Type</td>
                                <td>Phone No</td>
                                <td>Address</td>
                                <td>Contact Information</td>
                                <td>Histroy</td>
                                <td>No of Employee</td>
                                <td>
                                    <a href="#" class="btn btn-success">Active</a>
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
