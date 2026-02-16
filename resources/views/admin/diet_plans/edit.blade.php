@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Diet Plan</h2>

    <form action="{{ route('diet-plans.update',$diet_plan->id) }}" method="POST">
        @method('PUT')
        @include('admin.diet_plans._form')
    </form>
</div>
@endsection
