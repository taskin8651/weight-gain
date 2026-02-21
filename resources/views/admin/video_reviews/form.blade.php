@csrf

<div class="space-y-6">

    <div>
        <label class="block text-sm font-semibold mb-1">Name</label>
        <input type="text" name="name"
               value="{{ old('name', $video_review->name ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg">
    </div>

    <div>
        <label class="block text-sm font-semibold mb-1">Designation</label>
        <input type="text" name="designation"
               value="{{ old('designation', $video_review->designation ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg">
    </div>

    <div>
        <label class="block text-sm font-semibold mb-1">YouTube URL</label>
        <input type="url" name="youtube_url"
               value="{{ old('youtube_url', $video_review->youtube_url ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg">
    </div>

    <div>
        <label class="block text-sm font-semibold mb-1">Thumbnail</label>
        <input type="file" name="thumbnail" class="w-full">
        @if(!empty($video_review->thumbnail))
            <img src="{{ asset('storage/'.$video_review->thumbnail) }}"
                 class="mt-3 h-24 rounded">
        @endif
    </div>

    <div>
        <label class="flex items-center gap-2">
            <input type="checkbox" name="is_active"
                   {{ old('is_active', $video_review->is_active ?? 1) ? 'checked' : '' }}>
            Active
        </label>
    </div>

    <button type="submit"
        class="px-6 py-2 bg-indigo-600 text-white rounded-lg">
        Save Review
    </button>

</div>