@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Testimonial</h2>

    <form action="{{ route('testimonials.update',$testimonial->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.testimonials._form')
    </form>
</div>
@endsection
