@csrf

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Name --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Name
            </label>
            <input type="text" name="name"
                value="{{ old('name', $contact->name ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Email --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Email
            </label>
            <input type="email" name="email"
                value="{{ old('email', $contact->email ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

        {{-- Phone --}}
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Phone
            </label>
            <input type="text" name="phone"
                value="{{ old('phone', $contact->phone ?? '') }}"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg
                       focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                       outline-none transition">
        </div>

    </div>

    {{-- Message Full Width --}}
    <div>
        <label class="block text-sm font-semibold text-slate-700 mb-1">
            Message
        </label>
        <textarea name="message" rows="5"
            class="w-full px-4 py-2 border border-slate-300 rounded-lg
                   focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                   outline-none transition">{{ old('message', $contact->message ?? '') }}</textarea>
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="px-8 py-2 bg-indigo-600 text-white rounded-lg
                   hover:bg-indigo-700 transition shadow-md">
            Save Contact
        </button>
    </div>

</div>
