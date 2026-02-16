@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-6xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Settings
    </h2>

    <div class="bg-white p-8 rounded-2xl shadow">
        <form action="{{ route('admin.settings.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @include('admin.settings._form')
        </form>
    </div>

</div>
@endsection
