@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Brand
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.brands.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @include('admin.brands._form')
        </form>
    </div>

</div>
@endsection
