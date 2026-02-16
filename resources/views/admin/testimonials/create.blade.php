@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Testimonial
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.testimonials.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @include('admin.testimonials._form')
        </form>
    </div>

</div>
@endsection
