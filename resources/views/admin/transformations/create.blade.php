@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Add Transformation
    </h2>

    <div class="bg-white p-6 rounded-2xl shadow">
        <form action="{{ route('admin.transformations.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @include('admin.transformations._form')
        </form>
    </div>

</div>
@endsection
