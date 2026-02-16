@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Hero</h2>

    <form action="{{ route('hero-sections.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.heroes._form')
    </form>
</div>
@endsection
