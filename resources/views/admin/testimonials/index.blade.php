@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">
            Testimonials
        </h2>

        <a href="{{ route('admin.testimonials.create') }}"
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg
                  hover:bg-indigo-700 transition shadow">
            + Add Testimonial
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="min-w-full divide-y divide-slate-200">

            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-slate-600 uppercase text-left">
                        User
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-slate-600 uppercase text-left">
                        Rating
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-slate-600 uppercase text-center">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                @foreach($testimonials as $testimonial)
                <tr class="hover:bg-slate-50 transition">

                    <td class="px-6 py-4 flex items-center gap-3">
                        @if($testimonial->image)
                            <img src="{{ asset('storage/'.$testimonial->image) }}"
                                 class="w-10 h-10 rounded-full object-cover">
                        @endif
                        <div>
                            <div class="text-sm font-semibold text-slate-700">
                                {{ $testimonial->name }}
                            </div>
                            <div class="text-xs text-slate-500">
                                {{ $testimonial->designation }}
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex gap-1">
                            @for($i=1;$i<=5;$i++)
                                <span class="text-lg {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}">
                                    ★
                                </span>
                            @endfor
                        </div>
                    </td>

                    <td class="px-6 py-4 text-center space-x-2">

                        <a href="{{ route('admin.testimonials.edit',$testimonial->id) }}"
                           class="px-3 py-1 bg-yellow-500 text-white text-xs rounded-lg
                                  hover:bg-yellow-600 transition">
                            Edit
                        </a>

                        <form action="{{ route('admin.testimonials.destroy',$testimonial->id) }}"
                              method="POST"
                              class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button
                                class="px-3 py-1 bg-red-600 text-white text-xs rounded-lg
                                       hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="mt-4">
        {{ $testimonials->links() }}
    </div>

</div>
@endsection
