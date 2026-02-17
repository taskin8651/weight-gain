@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-3 gap-12">

        {{-- ================= LEFT CONTENT ================= --}}
        <div class="md:col-span-2">

           <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">

    {{-- Title --}}
    <h1 class="text-3xl md:text-4xl font-bold text-slate-800">
        {{ $service->title }}
    </h1>

    {{-- Date --}}
    <p class="text-sm text-slate-500 mt-2 md:mt-0">
        Published on {{ $service->created_at->format('F d, Y') }}
    </p>

</div>

{{-- Short Description --}}
            <p class="text-lg text-slate-600 leading-relaxed mb-2">
                {{ $service->short_description ?? 'Short introduction about this service.' }}
            </p>

           <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

    <div class="overflow-hidden rounded-2xl shadow-lg group">
        <img src="{{ !empty($service->image_one)
            ? asset('storage/'.$service->image_one)
            : 'https://via.placeholder.com/900x500' }}"
             class="w-full h-80 object-cover transition duration-500 group-hover:scale-105">
    </div>

    <div class="overflow-hidden rounded-2xl shadow-lg group">
        <img src="{{ !empty($service->image_two)
            ? asset('storage/'.$service->image_two)
            : 'https://via.placeholder.com/900x500' }}"
             class="w-full h-80 object-cover transition duration-500 group-hover:scale-105">
    </div>

</div>


            {{-- Full Description --}}
            <div class="prose max-w-none text-slate-700">
                <p>
                    {{ $service->description ?? 'Detailed service explanation goes here.' }}
                </p>
            </div>

            {{-- CTA --}}
            <div class="mt-2">
                <a href="{{ route('appointment.page') }}"
                   class="inline-block bg-emerald-600 text-white px-8 py-3 rounded-lg hover:bg-emerald-700 transition shadow-lg">
                    Book This Service
                </a>
            </div>

        </div>


        {{-- ================= RIGHT SIDEBAR ================= --}}
        <div>

            <div class="bg-emerald-50 p-6 rounded-2xl shadow-sm">

                <h3 class="text-xl font-semibold text-slate-800 mb-6">
                    Recent Services
                </h3>

                <div class="space-y-6">

                    @foreach($recentServices as $item)

                    <div class="flex gap-4 items-start">

                        <img src="{{ !empty($item->image_one)
                            ? asset('storage/'.$item->image_one)
                            : 'https://via.placeholder.com/100' }}"
                             class="w-20 h-20 object-cover rounded-lg">

                        <div>
                            <a href="{{ route('service.detail',$item->id) }}"
                               class="font-semibold text-slate-700 hover:text-emerald-600 transition">
                                {{ $item->title }}
                            </a>

                            <p class="text-xs text-slate-500 mt-1">
                                {{ $item->created_at->format('M d, Y') }}
                            </p>
                        </div>

                    </div>

                    @endforeach

                </div>

                <div class="mt-6">
                    <a href="{{ route('services.page') }}"
                       class="text-emerald-600 font-semibold hover:underline">
                        View All Services →
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>
</section>

@endsection
