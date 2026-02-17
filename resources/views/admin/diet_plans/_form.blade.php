@csrf

<div class="space-y-6">

    {{-- Grid Section --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Title --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Title
            </label>

            <input type="text" name="title"
                value="{{ old('title', $diet_plan->title ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Goal --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Goal
            </label>

            <select name="goal"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">

                <option value="">Select Goal</option>

                <option value="weight_loss"
                    {{ old('goal', $diet_plan->goal ?? '') == 'weight_loss' ? 'selected' : '' }}>
                    Weight Loss
                </option>

                <option value="weight_gain"
                    {{ old('goal', $diet_plan->goal ?? '') == 'weight_gain' ? 'selected' : '' }}>
                    Weight Gain
                </option>
            </select>

            @error('goal')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Program --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Program
            </label>

            <select name="program_id"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">

                <option value="">Select Program</option>

                @foreach($programs as $program)
                    <option value="{{ $program->id }}"
                        {{ old('program_id', $diet_plan->program_id ?? '') == $program->id ? 'selected' : '' }}>
                        {{ $program->title }}
                    </option>
                @endforeach
            </select>

            @error('program_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Image --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Diet Plan Image
            </label>

            <input type="file" name="image"
                class="w-full text-sm file:px-4 file:py-2 file:rounded-lg
                       file:bg-indigo-50 file:text-indigo-600">

            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            {{-- Preview --}}
            @if(!empty($diet_plan->image))
                <img src="{{ asset('storage/'.$diet_plan->image) }}"
                     class="mt-3 w-32 h-32 object-cover rounded-lg shadow">
            @endif
        </div>

    </div>

    {{-- Description --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Description
        </label>

        <textarea name="description" rows="5"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                   outline-none transition">{{ old('description', $diet_plan->description ?? '') }}</textarea>

        @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Diet Plan
        </button>
    </div>

</div>
