@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')


<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <img src="{{ !empty($about->image)
                ? asset('storage/'.$about->image)
                : 'https://via.placeholder.com/600x500' }}"
                 class="rounded-2xl shadow-lg w-full">
        </div>

        <div>
            <h1 class="text-4xl font-bold text-slate-800 mb-6">
                {{ $about->title ?? 'About Us' }}
            </h1>

            <p class="text-slate-600 leading-relaxed">
                {{ $about->description ?? 'We provide personalized fitness coaching focused on long-term sustainable results.' }}
            </p>

            <div class="mt-8">
                <a href="{{ route('contact.page') }}"
                   class="bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition">
                    Start Your Journey
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
