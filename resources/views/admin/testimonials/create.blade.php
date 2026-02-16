@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Testimonial</h2>

    <form action="{{ route('testimonials.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.testimonials._form')
    </form>
</div>
@endsection
