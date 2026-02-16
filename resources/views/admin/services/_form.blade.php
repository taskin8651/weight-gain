@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Title --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Title
            </label>
            <input type="text" name="title"
                value="{{ old('title', $service->title ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Short Description --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Short Description
            </label>
            <input type="text" name="short_description"
                value="{{ old('short_description', $service->short_description ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Icon --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Icon (Optional)
            </label>
            <input type="text" name="icon"
                value="{{ old('icon', $service->icon ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Image One --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Image One
            </label>

            <input type="file" name="image_one"
                class="w-full text-sm text-slate-600
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:text-sm file:font-semibold
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100 transition">

            @if(isset($service) && $service->image_one)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$service->image_one) }}"
                         class="w-40 rounded-lg shadow border">
                </div>
            @endif
        </div>

        {{-- Image Two --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Image Two
            </label>

            <input type="file" name="image_two"
                class="w-full text-sm text-slate-600
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:text-sm file:font-semibold
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100 transition">

            @if(isset($service) && $service->image_two)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$service->image_two) }}"
                         class="w-40 rounded-lg shadow border">
                </div>
            @endif
        </div>

    </div>

    {{-- Full Width Description --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Description
        </label>
        <textarea name="description" rows="5"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                   outline-none transition">{{ old('description', $service->description ?? '') }}</textarea>
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Service
        </button>
    </div>

</div>
