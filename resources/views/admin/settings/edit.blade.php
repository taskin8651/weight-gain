@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Setting</h2>

    <form action="{{ route('settings.update',$setting->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @include('admin.settings._form')
    </form>
</div>
@endsection
