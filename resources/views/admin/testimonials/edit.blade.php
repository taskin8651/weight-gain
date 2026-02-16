@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Edit Testimonial
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.testimonials.update',$testimonial->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @method('PUT')
            @include('admin.testimonials._form')
        </form>
    </div>

</div>
@endsection
