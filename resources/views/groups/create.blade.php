@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Group</h1>
    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
