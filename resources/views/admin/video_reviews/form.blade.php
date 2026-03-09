@csrf

<div class="space-y-6">

    {{-- Name --}}
    <div>
        <label class="block text-sm font-semibold mb-1">Name</label>
        <input type="text" name="name"
               value="{{ old('name', $video_review->name ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg"
               required>
    </div>

    {{-- Designation --}}
    <div>
        <label class="block text-sm font-semibold mb-1">Designation</label>
        <input type="text" name="designation"
               value="{{ old('designation', $video_review->designation ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg">
    </div>

    {{-- YouTube / Instagram URL --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            YouTube / Instagram URL
        </label>

        <input type="url"
               name="youtube_url"
               value="{{ old('youtube_url', $video_review->youtube_url ?? '') }}"
               class="w-full px-4 py-2 border rounded-lg"
               placeholder="Paste YouTube or Instagram Reel URL">

        <small class="text-gray-500">
            Example: https://www.youtube.com/watch?v=xxxx
            or https://www.instagram.com/reel/xxxx/
        </small>
    </div>

    {{-- Upload Video --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Upload Video (Optional)
        </label>

        <input type="file"
               name="video"
               accept="video/mp4,video/mov,video/avi"
               class="w-full">

        @if(!empty($video_review->video))
            <video class="mt-3 h-40 rounded" controls>
                <source src="{{ asset('storage/'.$video_review->video) }}">
            </video>
        @endif
    </div>

    {{-- Thumbnail --}}
    <div>
        <label class="block text-sm font-semibold mb-1">Thumbnail</label>

        <input type="file"
               name="thumbnail"
               accept="image/*"
               class="w-full">

        @if(!empty($video_review->thumbnail))
            <img src="{{ asset('storage/'.$video_review->thumbnail) }}"
                 class="mt-3 h-24 rounded">
        @endif
    </div>

    {{-- Status --}}
    <div>
        <label class="flex items-center gap-2">
            <input type="checkbox"
                   name="is_active"
                   value="1"
                   {{ old('is_active', $video_review->is_active ?? 1) ? 'checked' : '' }}>
            Active
        </label>
    </div>

    {{-- Submit --}}
    <button type="submit"
        class="px-6 py-2 bg-indigo-600 text-white rounded-lg">
        Save Review
    </button>

</div>