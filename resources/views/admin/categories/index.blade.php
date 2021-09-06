@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus-circle mr-1"></i> Add New</a>
                <h4>All Categories</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{$message}}
                        </div>
                    @endif
                    <table class="table table-bordered shadow-md bg-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>IMAGE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->image)
                                        <img src="{{asset('storage/category-images/'.$category->image)}}" alt="category-img" width="50" height="50">
                                    @else
                                        <img src="{{asset('images/category.png')}}" alt="category-img" width="50" height="50">
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('categories.edit', $category->id) }}"  class="btn btn-warning m-1" title="Edit" data-toggle="tooltip"><i class="fa fa-pen"></i></a>
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt"></i></button>
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
