@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Program</h2>

    <form action="{{ route('programs.update',$program->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.programs._form')
    </form>
</div>
@endsection
