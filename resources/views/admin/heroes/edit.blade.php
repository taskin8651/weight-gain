@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Hero</h2>

    <form action="{{ route('hero-sections.update',$hero_section->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.heroes._form')
    </form>
</div>
@endsection
