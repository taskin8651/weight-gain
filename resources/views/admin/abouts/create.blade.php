@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create About</h2>

    <form action="{{ route('abouts.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.abouts._form')
    </form>
</div>
@endsection
