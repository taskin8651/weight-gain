@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Name --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Brand Name
            </label>
            <input type="text" name="name"
                value="{{ old('name', $brand->name ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Logo --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Brand Logo
            </label>

            <input type="file" name="logo"
                class="w-full text-sm text-slate-600
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:text-sm file:font-semibold
                       file:bg-indigo-50 file:text-indigo-600
                       hover:file:bg-indigo-100 transition">

            @if(isset($brand) && $brand->logo)
                <div class="mt-3">
                    <img src="{{ asset('storage/'.$brand->logo) }}"
                         class="w-32 h-20 object-contain bg-slate-50 p-2 rounded-lg shadow border">
                </div>
            @endif
        </div>

    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Brand
        </button>
    </div>

</div>
