@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Transformation</h2>

    <form action="{{ route('transformations.update',$transformation->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.transformations._form')
    </form>
</div>
@endsection
