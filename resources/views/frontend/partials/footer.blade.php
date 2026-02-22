@php 
use App\Models\Setting;
$setting = App\Models\Setting::first();
@endphp

<footer class="bg-slate-900 text-slate-300 pt-16 pb-8">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10">

        {{-- Logo + About --}}
        <div>

            <div class="flex items-center gap-2 mb-4">
                @if(!empty($setting->logo))
                    <img src="{{ asset('storage/'.$setting->logo) }}"
                         class="h-18 w-32 object-contain">
                         @else
                            
                            <span class="text-lg font-semibold text-white">
                                {{ $setting->site_name ?? 'Fitness Coaching' }}
                            </span>
                            @endif
            </div>

            <p class="text-sm text-slate-400">
                Transforming lives through personalized fitness and nutrition coaching.
            </p>

        </div>

        {{-- Quick Links --}}
        <div class="grid grid-cols-2 gap-8">

    {{-- Quick Links --}}
    <div>
        <h3 class="text-white font-semibold mb-4">
            Quick Links
        </h3>

        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{ route('home') }}"
                   class="hover:text-emerald-400 transition">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('programs.page') }}"
                   class="hover:text-emerald-400 transition">
                    Programs
                </a>
            </li>

            <li>
                <a href="{{ route('services.page') }}"
                   class="hover:text-emerald-400 transition">
                    Services
                </a>
            </li>

            <li>
                <a href="{{ route('diet.page') }}"
                   class="hover:text-emerald-400 transition">
                    Diet Plans
                </a>
            </li>

            <li>
                <a href="{{ route('transformations.page') }}"
                   class="hover:text-emerald-400 transition">
                    Transformations
                </a>
            </li>

            <li>
                <a href="{{ route('video-reviews.page') }}"
                   class="hover:text-emerald-400 transition">
                    Video Reviews
                </a>
            </li>

            <li>
                <a href="{{ route('contact.page') }}"
                   class="hover:text-emerald-400 transition">
                    Contact
                </a>
            </li>
        </ul>
    </div>


    {{-- Contact Info --}}
    <div>
        <h3 class="text-white font-semibold mb-4">
            Contact
        </h3>

        <ul class="space-y-2 text-sm text-slate-400">
            <li class="flex items-start gap-2">
                <span>📧</span>
                <span>{{ $setting->email ?? 'info@fitness.com' }}</span>
            </li>

            <li class="flex items-start gap-2">
                <span>📞</span>
                <span>{{ $setting->phone ?? '+91 98765 43210' }}</span>
            </li>

            <li class="flex items-start gap-2">
                <span>📍</span>
                <span>{{ $setting->address ?? 'Your Fitness Studio Address' }}</span>
            </li>
        </ul>
    </div>

</div>

        {{-- Social Links --}}
        <div>
            <h3 class="text-white font-semibold mb-4">
                Follow Us
            </h3>

            <div class="flex gap-4 text-lg">

                @if(!empty($setting->facebook))
                    <a href="{{ $setting->facebook }}" target="_blank"
                       class="hover:text-emerald-400 transition">
                        <i class="fab fa-facebook"></i>
                    </a>
                @endif

                @if(!empty($setting->instagram))
                    <a href="{{ $setting->instagram }}" target="_blank"
                       class="hover:text-emerald-400 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                @endif

                @if(!empty($setting->youtube))
                    <a href="{{ $setting->youtube }}" target="_blank"
                       class="hover:text-emerald-400 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                @endif

            </div>
        </div>

    </div>

    {{-- Bottom --}}
    <div class="border-t border-slate-800 mt-12 pt-6 text-center text-sm text-slate-500">
        © {{ date('Y') }} {{ $setting->site_title ?? 'Fitness Coaching' }}.
        {{ $setting->footer_text ?? 'All Rights Reserved.' }}
    </div>

</footer>
