@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Contact</h2>

    <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
        @method('PUT')
        @include('admin.contacts._form')
    </form>
</div>
@endsection
