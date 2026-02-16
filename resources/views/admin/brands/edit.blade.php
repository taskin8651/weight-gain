@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Brand</h2>

    <form action="{{ route('brands.update',$brand->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.brands._form')
    </form>
</div>
@endsection
