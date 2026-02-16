@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Name --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Name
            </label>
            <input type="text" name="name"
                value="{{ old('name', $testimonial->name ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        {{-- Designation --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Designation
            </label>
            <input type="text" name="designation"
                value="{{ old('designation', $testimonial->designation ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        {{-- Rating --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Rating
            </label>
            <select name="rating"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @for($i=1;$i<=5;$i++)
                    <option value="{{ $i }}"
                        {{ old('rating', $testimonial->rating ?? '') == $i ? 'selected' : '' }}>
                        {{ $i }} Star
                    </option>
                @endfor
            </select>
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
                       file:bg-indigo-50 file:text-indigo-600">

            @if(isset($testimonial) && $testimonial->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$testimonial->image) }}"
                         class="w-24 h-24 object-cover rounded-full shadow border">
                </div>
            @endif
        </div>

    </div>

    {{-- Message --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Message
        </label>
        <textarea name="message" rows="5"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ old('message', $testimonial->message ?? '') }}</textarea>
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Testimonial
        </button>
    </div>

</div>
