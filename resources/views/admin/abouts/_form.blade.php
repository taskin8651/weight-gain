@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Title --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Title
            </label>
            <input type="text" name="title"
                value="{{ old('title', $about->title ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Image --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Image
            </label>

            <input type="file" name="image"
                class="w-full text-sm text-slate-600
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:text-sm file:font-semibold
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100 transition">

            @if(isset($about) && $about->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$about->image) }}"
                         class="w-40 rounded-lg shadow border">
                </div>
            @endif
        </div>

    </div>

    {{-- Description Full Width --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Description
        </label>
        <textarea name="description" rows="5"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                   outline-none transition">{{ old('description', $about->description ?? '') }}</textarea>
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save About
        </button>
    </div>

</div>
