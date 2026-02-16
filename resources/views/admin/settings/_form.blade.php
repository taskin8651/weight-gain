@csrf

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    {{-- Site Title --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Site Title
        </label>
        <input type="text" name="site_title"
            value="{{ old('site_title', $setting->site_title ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- Email --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Email
        </label>
        <input type="email" name="email"
            value="{{ old('email', $setting->email ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- Phone --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Phone
        </label>
        <input type="text" name="phone"
            value="{{ old('phone', $setting->phone ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- Facebook --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Facebook
        </label>
        <input type="text" name="facebook"
            value="{{ old('facebook', $setting->facebook ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- Instagram --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Instagram
        </label>
        <input type="text" name="instagram"
            value="{{ old('instagram', $setting->instagram ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- YouTube --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            YouTube
        </label>
        <input type="text" name="youtube"
            value="{{ old('youtube', $setting->youtube ?? '') }}"
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
    </div>

    {{-- Logo --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Logo
        </label>
        <input type="file" name="logo"
            class="w-full text-sm file:px-4 file:py-2 file:rounded-lg file:bg-indigo-50 file:text-indigo-600">

        @if(isset($setting) && $setting->logo)
            <img src="{{ asset('storage/'.$setting->logo) }}"
                 class="mt-3 w-32 h-20 object-contain bg-slate-50 p-2 rounded shadow">
        @endif
    </div>

    {{-- Favicon --}}
    <div>
        <label class="block text-sm font-semibold mb-1">
            Favicon
        </label>
        <input type="file" name="favicon"
            class="w-full text-sm file:px-4 file:py-2 file:rounded-lg file:bg-indigo-50 file:text-indigo-600">

        @if(isset($setting) && $setting->favicon)
            <img src="{{ asset('storage/'.$setting->favicon) }}"
                 class="mt-3 w-12 h-12 object-contain">
        @endif
    </div>

</div>

{{-- Address --}}
<div class="mt-6">
    <label class="block text-sm font-semibold mb-1">
        Address
    </label>
    <textarea name="address" rows="3"
        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">{{ old('address', $setting->address ?? '') }}</textarea>
</div>

{{-- Footer --}}
<div class="mt-6">
    <label class="block text-sm font-semibold mb-1">
        Footer Text
    </label>
    <input type="text" name="footer_text"
        value="{{ old('footer_text', $setting->footer_text ?? '') }}"
        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
</div>

<div class="mt-8">
    <button type="submit"
        class="px-8 py-3 bg-indigo-600 text-white rounded-lg
               hover:bg-indigo-700 transition shadow-lg">
        Save Settings
    </button>
</div>
