@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">
            Services
        </h2>

        <a href="{{ route('admin.services.create') }}"
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg
                  hover:bg-indigo-700 transition shadow">
            + Add Service
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
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase">
                        Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase">
                        Image
                    </th>
                    <th class="px-6 py-3 text-center text-xs font-semibold text-slate-600 uppercase">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-200 bg-white">
                @foreach($services as $service)
                <tr class="hover:bg-slate-50 transition">

                    <td class="px-6 py-4 text-sm text-slate-700">
                        {{ $service->title }}
                    </td>

                    <td class="px-6 py-4">
                        @if($service->image_one)
                            <img src="{{ asset('storage/'.$service->image_one) }}"
                                 class="w-24 h-16 object-cover rounded-lg shadow">
                        @endif
                    </td>

                    <td class="px-6 py-4 text-center space-x-2">

                        <a href="{{ route('admin.services.edit',$service->id) }}"
                           class="px-3 py-1 bg-yellow-500 text-white text-xs rounded-lg
                                  hover:bg-yellow-600 transition">
                            Edit
                        </a>

                        <form action="{{ route('admin.services.destroy',$service->id) }}"
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
        {{ $services->links() }}
    </div>

</div>
@endsection
