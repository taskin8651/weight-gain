@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-800">
            Transformations
        </h2>

        <a href="{{ route('admin.transformations.create') }}"
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            + Add
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow p-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach($transformations as $transformation)

            <div class="border rounded-xl p-4 shadow-sm hover:shadow-md transition">

                <h3 class="font-semibold text-slate-700 mb-2">
                    {{ $transformation->name }}
                </h3>

                <div class="grid grid-cols-2 gap-2 mb-3">
                    <img src="{{ asset('storage/'.$transformation->before_image) }}"
                         class="rounded-lg h-32 object-cover">

                    <img src="{{ asset('storage/'.$transformation->after_image) }}"
                         class="rounded-lg h-32 object-cover">
                </div>

                <div class="text-xs mb-3">
                    <span class="px-2 py-1 rounded-full
                        {{ $transformation->goal == 'weight_loss'
                            ? 'bg-red-100 text-red-600'
                            : 'bg-green-100 text-green-600' }}">
                        {{ ucfirst(str_replace('_',' ',$transformation->goal)) }}
                    </span>
                </div>

                <div class="flex justify-between">

                    <a href="{{ route('admin.transformations.edit',$transformation->id) }}"
                       class="text-sm px-3 py-1 bg-yellow-500 text-white rounded-lg">
                        Edit
                    </a>

                    <form action="{{ route('admin.transformations.destroy',$transformation->id) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-sm px-3 py-1 bg-red-600 text-white rounded-lg">
                            Delete
                        </button>
                    </form>

                </div>

            </div>

            @endforeach

        </div>

        <div class="mt-6">
            {{ $transformations->links() }}
        </div>

    </div>

</div>
@endsection
