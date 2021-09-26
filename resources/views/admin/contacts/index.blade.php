@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form class="form-inline float-right">
                    <div class="input-group">
                        <input name="search" class="form-control" type="search" placeholder="Search" aria-label="Search"
                            value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <h4>Contact Message</h4>
                <div class="table-responsive mt-4">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{ $message }}
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
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone_no }}</td>
                                    <td>{{ Str::limit($contact->message, 50, '...') }}</td>
                                    <td>
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('admin.contacts.show', $contact->id) }}"
                                                class="btn btn-info m-1" title="Detail" data-toggle="tooltip"><i
                                                    class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger m-1"
                                                onclick="return confirm('Are you sure want to delete?')"><i
                                                    class="fa fa-trash-alt"></i></button>
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
