@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-emerald-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-800">
                Our Services
            </h1>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Professional support and expert guidance to help you reach your fitness goals efficiently and sustainably.
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            @forelse($services as $service)

            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group">

                {{-- Image --}}
                <div class="relative h-60 overflow-hidden">
                    <img src="{{ !empty($service->image_one)
                        ? asset('storage/'.$service->image_one)
                        : 'https://via.placeholder.com/600x400' }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>

                {{-- Content --}}
                <div class="p-6 flex flex-col h-full">

                    <h3 class="text-xl font-semibold text-slate-800 mb-3">
                        {{ $service->title }}
                    </h3>

                    <!-- <p class="text-sm text-slate-600 mb-5 flex-grow">
                        {{ \Illuminate\Support\Str::limit($service->short_description ?? $service->description, 130) }}
                    </p> -->

                    <a href="{{ route('service.detail', $service->id) }}"
                       class="inline-block text-center bg-emerald-600 text-white py-2 rounded-lg hover:bg-emerald-700 transition">
                        View Details
                    </a>

                </div>

            </div>

            @empty

            <div class="col-span-3 text-center text-slate-500">
                No services available.
            </div>

            @endforelse

        </div>

    </div>
</section>

@endsection
