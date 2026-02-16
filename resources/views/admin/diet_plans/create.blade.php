@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Create Diet Plan</h2>

    <form action="{{ route('diet-plans.store') }}" method="POST">
        @include('admin.diet_plans._form')
    </form>
</div>
@endsection
