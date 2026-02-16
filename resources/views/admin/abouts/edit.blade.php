@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Edit About Section
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.abouts.update',$about->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @method('PUT')
            @include('admin.abouts._form')
        </form>
    </div>

</div>
@endsection
