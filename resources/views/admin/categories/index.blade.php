@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="{{url('admin/categories/create')}}" class="btn btn-primary float-right">+Add new</a>
                <h4>All Categories</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered shadow-md bg-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{url('admin/categories/'.$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{url('admin/categories/'.$category->id.'/edit')}}" class="btn btn-warning">Edit</a>

                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
