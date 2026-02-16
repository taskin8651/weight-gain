@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Program</h2>

    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.programs._form')
    </form>
</div>
@endsection
