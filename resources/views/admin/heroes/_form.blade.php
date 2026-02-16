@csrf

<div class="bg-white p-6 rounded-xl shadow space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Title --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Title
            </label>
            <input type="text" name="title"
                value="{{ old('title', $hero_section->title ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Subtitle --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Subtitle
            </label>
            <input type="text" name="subtitle"
                value="{{ old('subtitle', $hero_section->subtitle ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Button Text --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Button Text
            </label>
            <input type="text" name="button_text"
                value="{{ old('button_text', $hero_section->button_text ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Button Link --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Button Link
            </label>
            <input type="text" name="button_link"
                value="{{ old('button_link', $hero_section->button_link ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

    </div>

    {{-- Full Width Description --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Description
        </label>
        <textarea name="description" rows="4"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                   outline-none transition">{{ old('description', $hero_section->description ?? '') }}</textarea>
    </div>

    {{-- Background Image --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-2">
            Background Image
        </label>

        <input type="file" name="background_image"
            class="w-full text-sm text-slate-600
                   file:mr-4 file:py-2 file:px-4
                   file:rounded-lg file:border-0
                   file:text-sm file:font-semibold
                   file:bg-indigo-50 file:text-indigo-600
                   hover:file:bg-indigo-100 transition">

        @if(isset($hero_section) && $hero_section->background_image)
            <div class="mt-4">
                <img src="{{ asset('storage/'.$hero_section->background_image) }}"
                     class="w-60 rounded-lg shadow-md border">
            </div>
        @endif
    </div>

    {{-- Submit Button --}}
    <div class="pt-4">
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white font-medium rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Hero
        </button>
    </div>

</div>
