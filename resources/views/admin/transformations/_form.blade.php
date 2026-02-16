@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Name --}}
        <div>
            <label class="block text-sm font-semibold mb-1">
                Client Name
            </label>
            <input type="text" name="name"
                value="{{ old('name', $transformation->name ?? '') }}"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
        </div>

        {{-- Goal --}}
        <div>
            <label class="block text-sm font-semibold mb-1">
                Goal
            </label>
            <select name="goal"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
                <option value="weight_loss"
                    {{ old('goal', $transformation->goal ?? '') == 'weight_loss' ? 'selected' : '' }}>
                    Weight Loss
                </option>
                <option value="weight_gain"
                    {{ old('goal', $transformation->goal ?? '') == 'weight_gain' ? 'selected' : '' }}>
                    Weight Gain
                </option>
            </select>
        </div>

        {{-- Before Image --}}
        <div>
            <label class="block text-sm font-semibold mb-1">
                Before Image
            </label>
            <input type="file" name="before_image"
                class="w-full text-sm file:px-4 file:py-2 file:rounded-lg file:bg-indigo-50 file:text-indigo-600">

            @if(!empty($transformation->before_image))
                <img src="{{ asset('storage/'.$transformation->before_image) }}"
                     class="mt-3 w-40 h-40 object-cover rounded-lg shadow">
            @endif
        </div>

        {{-- After Image --}}
        <div>
            <label class="block text-sm font-semibold mb-1">
                After Image
            </label>
            <input type="file" name="after_image"
                class="w-full text-sm file:px-4 file:py-2 file:rounded-lg file:bg-indigo-50 file:text-indigo-600">

            @if(!empty($transformation->after_image))
                <img src="{{ asset('storage/'.$transformation->after_image) }}"
                     class="mt-3 w-40 h-40 object-cover rounded-lg shadow">
            @endif
        </div>

    </div>

    {{-- Description --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Description
        </label>
        <textarea name="description" rows="4"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">{{ old('description', $transformation->description ?? '') }}</textarea>
    </div>

    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Save Transformation
        </button>
    </div>

</div>
