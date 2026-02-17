@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">
<div class="max-w-6xl mx-auto px-6">

    <div class="grid md:grid-cols-2 gap-12 items-center">

        {{-- Image --}}
        <div>
            <img src="{{ !empty($diet->image)
                ? asset('storage/'.$diet->image)
                : 'https://via.placeholder.com/600x500' }}"
                 class="rounded-2xl shadow-xl w-full object-cover">
        </div>

        {{-- Content --}}
        <div>

            <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                {{ $diet->title }}
            </h1>

            {{-- Goal --}}
            <span class="inline-block px-4 py-1 text-sm rounded-full
                {{ $diet->goal == 'weight_loss'
                    ? 'bg-emerald-100 text-emerald-600'
                    : 'bg-blue-100 text-blue-600' }}">
                {{ ucfirst(str_replace('_',' ',$diet->goal)) }}
            </span>

            <p class="mt-6 text-slate-600 leading-relaxed">
                {{ $diet->description }}
            </p>

            {{-- Program Info --}}
           @if($diet->program)
<div class="mt-8 bg-gradient-to-r from-emerald-50 to-white border border-emerald-100 rounded-2xl p-6 shadow-sm">

    <h4 class="text-lg font-semibold text-slate-800 mb-5">
        Program Details
    </h4>

    <div class="grid grid-cols-2 gap-6">

        {{-- Program Name --}}
        <div class="bg-white rounded-xl p-4 shadow-sm">
            <p class="text-xs text-slate-500 mb-1">Program</p>
            <p class="font-semibold text-slate-800">
                {{ $diet->program->title }}
            </p>
        </div>

        {{-- Duration --}}
        <div class="bg-white rounded-xl p-4 shadow-sm">
            <p class="text-xs text-slate-500 mb-1">Duration</p>
            <p class="font-semibold text-slate-800">
                {{ $diet->program->duration }}
            </p>
        </div>

        {{-- Type --}}
        <div class="bg-white rounded-xl p-4 shadow-sm col-span-2">
            <p class="text-xs text-slate-500 mb-1">Program Type</p>
            <span class="inline-block px-3 py-1 text-xs rounded-full
                {{ $diet->program->type == 'weight_loss'
                    ? 'bg-emerald-100 text-emerald-600'
                    : 'bg-blue-100 text-blue-600' }}">
                {{ ucfirst(str_replace('_',' ',$diet->program->type)) }}
            </span>
        </div>

    </div>

    {{-- Price Section --}}
    <div class="mt-6 flex items-center justify-between bg-emerald-600 text-white px-6 py-4 rounded-xl">

        <div>
            <p class="text-xs opacity-80">Program Price</p>
            <p class="text-2xl font-bold">
                ₹ {{ $diet->program->price }}
            </p>
        </div>

        <a href="{{ route('appointment.page') }}"
           class="bg-white text-emerald-600 px-5 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-100 transition">
            Enroll Now
        </a>

    </div>

</div>
@endif


        </div>

    </div>

</div>
</section>

@endsection
