@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Service</h2>

    <form action="{{ route('services.store') }}"
          method="POST"
          enctype="multipart/form-data">
        @include('admin.services._form')
    </form>
</div>
@endsection
