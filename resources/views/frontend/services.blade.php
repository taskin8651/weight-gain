@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-emerald-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-slate-800">Our Services</h1>
            <p class="mt-4 text-slate-600">
                Professional support to help you reach your fitness goals.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            @forelse($services as $service)

            <div class="bg-white rounded-2xl p-8 text-center shadow-sm">

                <img src="{{ !empty($service->image_one)
                    ? asset('storage/'.$service->image_one)
                    : 'https://via.placeholder.com/100' }}"
                     class="mx-auto h-20 w-20 rounded-full object-cover shadow mb-6">

                <h3 class="text-lg font-semibold mb-3">
                    {{ $service->title }}
                </h3>

                <p class="text-sm text-slate-600">
                    {{ $service->description }}
                </p>

            </div>

            @empty

            <p>No services available.</p>

            @endforelse

        </div>
    </div>
</section>

@endsection
