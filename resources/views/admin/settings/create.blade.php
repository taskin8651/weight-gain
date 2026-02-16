@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Setting</h2>

    <form action="{{ route('settings.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.settings._form')
    </form>
</div>
@endsection
