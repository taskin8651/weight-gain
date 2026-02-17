@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-6">

    {{-- Filter Buttons --}}
    <div class="flex flex-wrap justify-center gap-4 mb-12">

        <a href="{{ route('diet.page') }}"
           class="px-5 py-2 rounded-full border transition
           {{ empty($type) ? 'bg-emerald-600 text-white border-emerald-600' : 'hover:bg-emerald-50' }}">
           All
        </a>

        <a href="{{ route('diet.page',['type'=>'weight_loss']) }}"
           class="px-5 py-2 rounded-full border transition
           {{ ($type ?? '') == 'weight_loss'
                ? 'bg-emerald-600 text-white border-emerald-600'
                : 'hover:bg-emerald-50' }}">
           Weight Loss
        </a>

        <a href="{{ route('diet.page',['type'=>'weight_gain']) }}"
           class="px-5 py-2 rounded-full border transition
           {{ ($type ?? '') == 'weight_gain'
                ? 'bg-emerald-600 text-white border-emerald-600'
                : 'hover:bg-emerald-50' }}">
           Weight Gain
        </a>

    </div>

    {{-- Diet Cards --}}
    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">

        @forelse($dietPlans as $diet)

        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">

            {{-- Image --}}
            <img src="{{ !empty($diet->image)
                    ? asset('storage/'.$diet->image)
                    : 'https://via.placeholder.com/400x300' }}"
                 class="w-full h-60 object-cover">

            <div class="p-6">

                {{-- Title --}}
                <h3 class="text-xl font-semibold mb-2 text-slate-800">
                    {{ $diet->title }}
                </h3>

                {{-- Goal Badge --}}
                <span class="px-3 py-1 text-xs rounded-full
                    {{ $diet->goal == 'weight_loss'
                        ? 'bg-emerald-100 text-emerald-600'
                        : 'bg-blue-100 text-blue-600' }}">
                    {{ ucfirst(str_replace('_',' ',$diet->goal)) }}
                </span>

                {{-- Description --}}
                <p class="text-sm text-slate-600 mt-4">
                    {{ \Illuminate\Support\Str::limit($diet->description,120) }}
                </p>

                {{-- Program --}}
                @if($diet->program)
                <div class="mt-4 text-sm text-slate-500">
                    Program: {{ $diet->program->title }}
                </div>
                @endif

                {{-- Button --}}
                <a href="{{ route('diet.detail',$diet->id) }}"
                   class="mt-6 inline-block bg-emerald-600 text-white px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                    View Plan
                </a>

            </div>
        </div>

        @empty
            <div class="col-span-3 text-center text-slate-500">
                No Diet Plans Available
            </div>
        @endforelse

    </div>

    {{-- Pagination --}}
    <div class="mt-12">
        {{ $dietPlans->links() }}
    </div>

</div>
</section>

@endsection
