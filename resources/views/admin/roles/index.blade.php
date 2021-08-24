@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>Role</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Role</th>
                                <th>User Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-primary">Mg Mg</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Company</td>
                                <td>
                                    <span class="badge badge-primary">ABC Company</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
