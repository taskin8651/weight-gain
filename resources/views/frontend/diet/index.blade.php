@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-6">

    {{-- Filter Buttons --}}
    <div class="flex justify-center gap-4 mb-12">
        <a href="{{ route('diet.page') }}"
           class="px-5 py-2 rounded-full border
           {{ empty($type) ? 'bg-emerald-600 text-white' : '' }}">
           All
        </a>

        <a href="{{ route('diet.page',['type'=>'weight_loss']) }}"
           class="px-5 py-2 rounded-full border
           {{ $type=='weight_loss' ? 'bg-emerald-600 text-white' : '' }}">
           Weight Loss
        </a>

        <a href="{{ route('diet.page',['type'=>'weight_gain']) }}"
           class="px-5 py-2 rounded-full border
           {{ $type=='weight_gain' ? 'bg-emerald-600 text-white' : '' }}">
           Weight Gain
        </a>
    </div>

    {{-- Diet Cards --}}
    <div class="grid md:grid-cols-3 gap-8">

        @forelse($dietPlans as $diet)

        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">

            <img src="{{ !empty($diet->image)
                ? asset('storage/'.$diet->image)
                : 'https://via.placeholder.com/600x400' }}"
                 class="h-52 w-full object-cover">

            <div class="p-6">

                <h3 class="text-xl font-semibold mb-2">
                    {{ $diet->title }}
                </h3>

                <span class="px-3 py-1 text-xs rounded-full
                    {{ $diet->type=='weight_loss'
                        ? 'bg-emerald-100 text-emerald-600'
                        : 'bg-blue-100 text-blue-600' }}">
                    {{ ucfirst(str_replace('_',' ',$diet->type)) }}
                </span>

                <p class="text-sm text-slate-600 mt-4">
                    {{ \Illuminate\Support\Str::limit($diet->description,120) }}
                </p>

                <div class="mt-4 text-sm text-slate-500">
                    Duration: {{ $diet->duration ?? '12 Weeks' }} <br>
                    Calories: {{ $diet->calories ?? '2000 kcal' }}
                </div>

                <a href="{{ route('diet.detail',$diet->id) }}"
                   class="mt-6 inline-block bg-emerald-600 text-white px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                    View Plan
                </a>

            </div>
        </div>

        @empty
            <p class="text-center col-span-3">
                No Diet Plans Available
            </p>
        @endforelse

    </div>

</div>
</section>

@endsection
