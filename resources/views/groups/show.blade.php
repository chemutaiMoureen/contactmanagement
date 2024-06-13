@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Group Details</h1>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $group->name }}" readonly>
    </div>
    <a href="{{ route('groups.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
