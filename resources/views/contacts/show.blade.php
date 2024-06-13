@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contact Details</h1>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{ $contact->name }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="{{ $contact->email }}" readonly>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" value="{{ $contact->phone }}" readonly>
    </div>
    <div class="form-group">
        <label for="group">Group:</label>
        <input type="text" class="form-control" id="group" value="{{ $contact->group->name }}" readonly>
    </div>
    <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
