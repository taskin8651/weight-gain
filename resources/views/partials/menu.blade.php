<aside
    x-data="{
        websiteOpen:
        {{ request()->is('admin/hero-sections*')
        || request()->is('admin/abouts*')
        || request()->is('admin/services*')
        || request()->is('admin/programs*')
        || request()->is('admin/diet-plans*')
        || request()->is('admin/transformations*')
        || request()->is('admin/testimonials*')
        || request()->is('admin/video-reviews*')
        || request()->is('admin/brands*') ? 'true' : 'false' }},

        bookingOpen:
        {{ request()->is('admin/appointments*')
        || request()->is('admin/contacts*') ? 'true' : 'false' }},

        settingOpen:
        {{ request()->is('admin/settings*') ? 'true' : 'false' }}
    }"
    class="w-64 bg-slate-900 text-slate-100 min-h-screen hidden lg:flex flex-col">

    {{-- BRAND --}}
    <div class="px-6 py-4 text-xl font-semibold border-b border-slate-700">
        {{ trans('panel.site_title') }}
    </div>

    <nav class="flex-1 px-3 py-4 space-y-1 text-sm">

        {{-- DASHBOARD --}}
        <a href="{{ route('admin.home') }}"
           class="flex items-center gap-3 px-3 py-2 rounded transition
           {{ request()->routeIs('admin.home') ? 'bg-slate-800 text-white' : 'hover:bg-slate-800' }}">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
        </a>

        {{-- WEBSITE CONTENT --}}
        <div class="mt-4">

            <button @click="websiteOpen = !websiteOpen"
                class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-800 transition">

                <span class="flex items-center gap-3">
                    <i class="fas fa-globe"></i>
                    Website Content
                </span>

                <i class="fas fa-chevron-down text-xs transition-transform duration-300"
                   :class="websiteOpen ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="websiteOpen" x-transition class="mt-1 ml-6 space-y-1">

                @php
                    $activeClass = 'bg-slate-800 text-white';
                    $normalClass = 'hover:bg-slate-800';
                @endphp

                <a href="{{ route('admin.hero-sections.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/hero-sections*') ? $activeClass : $normalClass }}">
                    Hero Section
                </a>

                <a href="{{ route('admin.abouts.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/abouts*') ? $activeClass : $normalClass }}">
                    About
                </a>

                <a href="{{ route('admin.services.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/services*') ? $activeClass : $normalClass }}">
                    Services
                </a>

                <a href="{{ route('admin.programs.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/programs*') ? $activeClass : $normalClass }}">
                    Programs
                </a>

                <a href="{{ route('admin.diet-plans.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/diet-plans*') ? $activeClass : $normalClass }}">
                    Diet Plans
                </a>

                <a href="{{ route('admin.transformations.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/transformations*') ? $activeClass : $normalClass }}">
                    Transformations
                </a>

                {{-- NEW VIDEO REVIEWS --}}
                <a href="{{ route('admin.video-reviews.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/video-reviews*') ? $activeClass : $normalClass }}">
                    Video Reviews
                </a>

                <a href="{{ route('admin.testimonials.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/testimonials*') ? $activeClass : $normalClass }}">
                    Testimonials
                </a>

                <a href="{{ route('admin.brands.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/brands*') ? $activeClass : $normalClass }}">
                    Brands
                </a>

            </div>
        </div>

        {{-- BOOKINGS --}}
        <div class="mt-4">

            <button @click="bookingOpen = !bookingOpen"
                class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-800 transition">

                <span class="flex items-center gap-3">
                    <i class="fas fa-calendar-check"></i>
                    Bookings
                </span>

                <i class="fas fa-chevron-down text-xs transition-transform duration-300"
                   :class="bookingOpen ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="bookingOpen" x-transition class="mt-1 ml-6 space-y-1">

                <a href="{{ route('admin.appointments.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/appointments*') ? $activeClass : $normalClass }}">
                    Appointments
                </a>

                <a href="{{ route('admin.contacts.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/contacts*') ? $activeClass : $normalClass }}">
                    Contact Messages
                </a>

            </div>
        </div>

        {{-- SETTINGS --}}
        <div class="mt-4">

            <button @click="settingOpen = !settingOpen"
                class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-800 transition">

                <span class="flex items-center gap-3">
                    <i class="fas fa-cog"></i>
                    Settings
                </span>

                <i class="fas fa-chevron-down text-xs transition-transform duration-300"
                   :class="settingOpen ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="settingOpen" x-transition class="mt-1 ml-6 space-y-1">

                <a href="{{ route('admin.settings.index') }}"
                   class="block px-3 py-2 rounded {{ request()->is('admin/settings*') ? $activeClass : $normalClass }}">
                    Website Settings
                </a>

            </div>
        </div>

    </nav>

    {{-- LOGOUT --}}
    <div class="border-t border-slate-700 p-3">
        <a href="#"
           onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
           class="flex items-center gap-3 px-3 py-2 rounded hover:bg-red-600">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </div>

</aside>