@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4>Contact Message</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    <table class="table table-bordered shadow-md bg-white">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone_no}}</td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="5">{{$contact->message}}</textarea>
                                </td>
                                <td>
                                    <form action="{{url('admin/contacts/'.$contact->id)}}" method="post">
                                        @csrf
                                        @method('delete')


                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
