@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Video Reviews</h2>

        <a href="{{ route('admin.video-reviews.create') }}"
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
            + Add Review
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full text-sm">

            <thead class="bg-slate-50">
                <tr>
                    <th class="px-4 py-3 text-left">Thumbnail</th>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">YouTube</th>
                    <th class="px-4 py-3 text-center">Status</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @forelse($reviews as $review)
                <tr>

                    <td class="px-4 py-3">
                        <img src="{{ $review->thumbnail
                            ? asset('storage/'.$review->thumbnail)
                            : 'https://img.youtube.com/vi/'.$review->youtube_id.'/hqdefault.jpg' }}"
                             class="h-14 w-24 object-cover rounded">
                    </td>

                    <td class="px-4 py-3">
                        {{ $review->name }}
                    </td>

                    <td class="px-4 py-3">
                        <a href="{{ $review->youtube_url }}" target="_blank"
                           class="text-indigo-600 underline">
                            View
                        </a>
                    </td>

                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 text-xs rounded-full
                            {{ $review->is_active ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                            {{ $review->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>

                    <td class="px-4 py-3 text-center space-x-2">

                        <a href="{{ route('admin.video-reviews.edit', $review) }}"
                           class="px-3 py-1 bg-yellow-500 text-white text-xs rounded">
                            Edit
                        </a>

                        <form action="{{ route('admin.video-reviews.destroy', $review) }}"
                              method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Delete this review?')">
                            @csrf
                            @method('DELETE')
                            <button class="px-3 py-1 bg-red-600 text-white text-xs rounded">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6">
                        No Reviews Found
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <div class="mt-4">
        {{ $reviews->links() }}
    </div>

</div>
@endsection