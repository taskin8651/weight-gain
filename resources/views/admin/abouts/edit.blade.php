@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit About</h2>

    <form action="{{ route('abouts.update',$about->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.abouts._form')
    </form>
</div>
@endsection
