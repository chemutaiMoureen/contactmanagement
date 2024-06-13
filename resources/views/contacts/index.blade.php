@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New Contact</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Group</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->group->name }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
