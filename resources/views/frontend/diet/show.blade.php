@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">
<div class="max-w-6xl mx-auto px-6">

    <div class="grid md:grid-cols-2 gap-12">

        {{-- Image --}}
        <div>
            <img src="{{ !empty($diet->image)
                ? asset('storage/'.$diet->image)
                : 'https://via.placeholder.com/600x500' }}"
                 class="rounded-2xl shadow-lg w-full">
        </div>

        {{-- Content --}}
        <div>

            <h1 class="text-4xl font-bold mb-4">
                {{ $diet->title }}
            </h1>

            <span class="px-4 py-1 text-sm rounded-full
                {{ $diet->type=='weight_loss'
                    ? 'bg-emerald-100 text-emerald-600'
                    : 'bg-blue-100 text-blue-600' }}">
                {{ ucfirst(str_replace('_',' ',$diet->type)) }}
            </span>

            <p class="mt-6 text-slate-600 leading-relaxed">
                {{ $diet->description }}
            </p>

            <div class="mt-6 space-y-2 text-sm text-slate-500">
                <div>Duration: {{ $diet->duration ?? '12 Weeks' }}</div>
                <div>Calories: {{ $diet->calories ?? '2000 kcal' }}</div>
                <div class="text-xl font-semibold text-emerald-600">
                    ₹ {{ $diet->price ?? '4999' }}
                </div>
            </div>

            <a href="{{ route('appointment.page') }}"
               class="mt-8 inline-block bg-emerald-600 text-white px-8 py-3 rounded-lg hover:bg-emerald-700 transition">
                Get This Plan
            </a>

        </div>

    </div>

</div>
</section>

@endsection
