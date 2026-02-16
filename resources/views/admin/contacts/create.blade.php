@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Contact</h2>

    <form action="{{ route('contacts.store') }}" method="POST">
        @include('admin.contacts._form')
    </form>
</div>
@endsection
