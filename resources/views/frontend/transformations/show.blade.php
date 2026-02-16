@extends('layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">
<div class="max-w-6xl mx-auto px-6">

    <div class="grid md:grid-cols-2 gap-12">

        {{-- Before / After Side by Side --}}
        <div class="grid grid-cols-2 gap-4">

            <div>
                <h4 class="text-sm mb-2 text-slate-500">Before</h4>
                <img src="{{ !empty($transformation->before_image)
                    ? asset('storage/'.$transformation->before_image)
                    : 'https://via.placeholder.com/500x500' }}"
                     class="rounded-xl shadow">
            </div>

            <div>
                <h4 class="text-sm mb-2 text-slate-500">After</h4>
                <img src="{{ !empty($transformation->after_image)
                    ? asset('storage/'.$transformation->after_image)
                    : 'https://via.placeholder.com/500x500' }}"
                     class="rounded-xl shadow">
            </div>

        </div>

        {{-- Content --}}
        <div>

            <h1 class="text-4xl font-bold mb-4">
                {{ $transformation->name }}
            </h1>

            <span class="px-4 py-1 text-sm rounded-full
                {{ $transformation->goal=='weight_loss'
                    ? 'bg-emerald-100 text-emerald-600'
                    : 'bg-blue-100 text-blue-600' }}">
                {{ ucfirst(str_replace('_',' ',$transformation->goal)) }}
            </span>

            <p class="mt-6 text-slate-600 leading-relaxed">
                {{ $transformation->description }}
            </p>

            <a href="{{ route('contact.page') }}"
               class="mt-8 inline-block bg-emerald-600 text-white px-8 py-3 rounded-lg hover:bg-emerald-700 transition">
                Start Your Journey
            </a>

        </div>

    </div>

</div>
</section>

@endsection
