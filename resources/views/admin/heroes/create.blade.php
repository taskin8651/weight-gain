@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Hero</h2>

    <form action="{{ route('admin.hero-sections.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.heroes._form')
    </form>
</div>
@endsection
@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-4xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Hero Section
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.hero-sections.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @include('admin.heroes._form')
        </form>
    </div>

</div>
@endsection
