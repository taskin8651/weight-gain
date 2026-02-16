@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Edit Program
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.programs.update',$program->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @method('PUT')
            @include('admin.programs._form')
        </form>
    </div>

</div>
@endsection
