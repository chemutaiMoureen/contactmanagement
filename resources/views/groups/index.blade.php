@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Groups</h1>
    <a href="{{ route('groups.create') }}" class="btn btn-primary">Add New Group</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($groups as $group)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $group->name }}</td>
            <td>
                <form action="{{ route('groups.destroy',$group->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('groups.show',$group->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('groups.edit',$group->id) }}">Edit</a>
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
