@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Edit Diet Plan
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.diet-plans.update',$diet_plan->id) }}"
              method="POST">
            @method('PUT')
            @include('admin.diet_plans._form')
        </form>
    </div>

</div>
@endsection
