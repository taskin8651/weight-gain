@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Service</h2>

    <form action="{{ route('services.update',$service->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.services._form')
    </form>
</div>
@endsection
