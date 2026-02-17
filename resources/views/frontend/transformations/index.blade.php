@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">
<div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-slate-800">
            Real Transformations
        </h1>
        <p class="mt-4 text-slate-600">
            See the incredible results achieved by our clients.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

        @forelse($transformations as $item)

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">

            {{-- Before / After Image --}}
            <div class="relative h-64">

                <img src="{{ !empty($item->before_image)
                    ? asset('storage/'.$item->before_image)
                    : 'https://via.placeholder.com/500x500' }}"
                     class="absolute inset-0 w-full h-full object-cover">

                <img src="{{ !empty($item->after_image)
                    ? asset('storage/'.$item->after_image)
                    : 'https://via.placeholder.com/500x500' }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-0 hover:opacity-100 transition duration-500">

                <div class="absolute bottom-3 left-3 bg-black/60 text-white text-xs px-3 py-1 rounded">
                    Hover to See After
                </div>
            </div>

            <div class="p-6">

                <h3 class="text-xl font-semibold mb-2">
                    {{ $item->name ?? 'Client Name' }}
                </h3>

                <span class="px-3 py-1 text-xs rounded-full
                    {{ $item->goal=='weight_loss'
                        ? 'bg-emerald-100 text-emerald-600'
                        : 'bg-blue-100 text-blue-600' }}">
                    {{ ucfirst(str_replace('_',' ',$item->goal ?? 'weight_loss')) }}
                </span>

                <p class="text-sm text-slate-600 mt-4">
                    {{ \Illuminate\Support\Str::limit($item->description,120) }}
                </p>

                <a href="{{ route('transformations.detail',$item->id) }}"
                   class="mt-5 inline-block bg-emerald-600 text-white px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                    View Story
                </a>

            </div>

        </div>

        @empty
            <p class="col-span-3 text-center">No Transformations Yet</p>
        @endforelse

    </div>

</div>
</section>

@endsection
