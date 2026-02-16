@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Brand</h2>

    <form action="{{ route('brands.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.brands._form')
    </form>
</div>
@endsection
