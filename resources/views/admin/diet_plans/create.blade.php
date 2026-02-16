@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-5xl mx-auto">

    <h2 class="text-2xl font-bold text-slate-800 mb-6">
        Create Diet Plan
    </h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <form action="{{ route('admin.diet-plans.store') }}"
              method="POST">
            @include('admin.diet_plans._form')
        </form>
    </div>

</div>
@endsection
