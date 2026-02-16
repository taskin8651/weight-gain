@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Transformation</h2>

    <form action="{{ route('transformations.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.transformations._form')
    </form>
</div>
@endsection
