@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-slate-800">Our Programs</h1>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Choose the perfect program designed for your fitness goals.
            </p>
        </div>

        {{-- Improved Responsive Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

            @forelse($programs as $program)

            <div class="bg-white border border-slate-100 rounded-2xl shadow-sm 
                        hover:shadow-xl hover:-translate-y-2 
                        transition-all duration-300 
                        flex flex-col overflow-hidden">

                {{-- Image --}}
                <div class="overflow-hidden">
                    <img src="{{ !empty($program->image)
                        ? asset('storage/'.$program->image)
                        : 'https://via.placeholder.com/400x300' }}"
                         class="h-56 w-full object-cover 
                                hover:scale-110 transition duration-500">
                </div>

                <div class="p-6 flex flex-col flex-grow">

                    {{-- Title --}}
                    <h3 class="text-xl font-semibold text-slate-800 mb-2">
                        {{ $program->title }}
                    </h3>

                    {{-- Type Badge --}}
                    <span class="px-3 py-1 text-xs rounded-full w-fit mb-3
                        {{ $program->type == 'weight_loss'
                            ? 'bg-emerald-100 text-emerald-600'
                            : 'bg-blue-100 text-blue-600' }}">
                        {{ ucfirst(str_replace('_',' ',$program->type)) }}
                    </span>

                    {{-- Description --}}
                    <p class="text-sm text-slate-600 mb-4 flex-grow">
                        {{ \Illuminate\Support\Str::limit($program->description,100) }}
                    </p>

                    {{-- Price & Duration --}}
                    <div class="text-sm text-slate-500 mb-5">
                        <div>Duration: {{ $program->duration }}</div>
                        <div class="font-semibold text-emerald-600 mt-1">
                            ₹ {{ $program->price }}
                        </div>
                    </div>

                    {{-- Button --}}
                    <a href="{{ route('contact.page') }}"
                       class="mt-auto bg-emerald-600 text-white text-center py-2 rounded-lg 
                              hover:bg-emerald-700 transition">
                        Join Now
                    </a>

                </div>

            </div>

            @empty

            <p class="col-span-full text-center text-slate-500">
                No programs available.
            </p>

            @endforelse

        </div>
    </div>
</section>


@endsection
