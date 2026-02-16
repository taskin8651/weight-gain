@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Message Detail</h2>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong></p>
    <div class="border p-3">
        {{ $contact->message }}
    </div>

    <a href="{{ route('contacts.index') }}"
       class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
