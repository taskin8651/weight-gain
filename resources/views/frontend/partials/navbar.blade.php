@php 
use App\Models\Setting;
$setting = App\Models\Setting::first();
@endphp

<nav x-data="{ open: false, serviceOpen: false }"
     class="bg-white shadow-sm fixed w-full z-50">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center ">
            @if(!empty($setting->logo))
               <img src="{{ asset('storage/'.$setting->logo) }}"
     class="h-20 w-40 md:h-22 md:w-35 object-cover object-center mx-auto"
     style="object-position: center;">

            @else
            <span class="text-lg font-semibold text-emerald-600">
                {{ $setting->site_name ?? 'Fitness Coaching' }}
            </span>
            @endif  
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex gap-8 text-sm font-medium items-center">

            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'text-emerald-600' : '' }} hover:text-emerald-600 transition">
                Home
            </a>

            <a href="{{ route('programs.page') }}"
               class="{{ request()->routeIs('programs.*') ? 'text-emerald-600' : '' }} hover:text-emerald-600 transition">
                Cources
            </a>

            <a href="{{ route('diet.page') }}"
               class="{{ request()->routeIs('diet.*') ? 'text-emerald-600' : '' }} hover:text-emerald-600 transition">
                Diet Plans
            </a>

           <div class="relative group">

    {{-- Button --}}
    <button
        class="hover:text-emerald-600 transition flex items-center gap-1 py-2">
        Services
        <svg class="w-4 h-4 mt-[2px]" fill="none" stroke="currentColor"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    {{-- Dropdown --}}
    <div
        class="absolute left-0 top-full w-52 bg-white shadow-xl rounded-xl
               opacity-0 invisible
               group-hover:opacity-100 group-hover:visible
               transition-all duration-200
               mt-0">

        <a href="{{ route('services.page') }}"
           class="block px-4 py-3 hover:bg-emerald-50">
            All Services
        </a>

        <a href="{{ route('transformations.page') }}"
           class="block px-4 py-3 hover:bg-emerald-50">
            Transformations
        </a>

    </div>
</div>


            <a href="{{ route('about.page') }}"
               class="{{ request()->routeIs('about.*') ? 'text-emerald-600' : '' }} hover:text-emerald-600 transition">
                About
            </a>

            <a href="{{ route('contact.page') }}"
               class="{{ request()->routeIs('contact.*') ? 'text-emerald-600' : '' }} hover:text-emerald-600 transition">
                Contact
            </a>

        </div>

        {{-- Desktop CTA --}}
        <div class="hidden md:block">
            <a href="{{ route('appointment.page') }}"
               class="bg-emerald-600 text-white px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                Get Started
            </a>
        </div>

        {{-- Mobile Hamburger --}}
        <button @click="open = !open"
                class="md:hidden text-slate-700 focus:outline-none">
            <svg x-show="!open" class="h-7 w-7" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>

            <svg x-show="open" class="h-7 w-7" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>

    {{-- Mobile Menu --}}
    <div x-show="open"
         x-transition
         class="md:hidden bg-white border-t shadow-sm">

        <div class="flex flex-col px-6 py-4 space-y-4 text-sm font-medium">

            <a href="{{ route('home') }}" @click="open=false">Home</a>
            <a href="{{ route('programs.page') }}" @click="open=false">Programs</a>
            <a href="{{ route('diet.page') }}" @click="open=false">Diet Plans</a>

            {{-- Mobile Dropdown --}}
            <div>
                <button @click="serviceOpen = !serviceOpen"
                        class="flex justify-between w-full">
                    Services
                    <span>▼</span>
                </button>

                <div x-show="serviceOpen" class="pl-4 mt-2 space-y-2">
                    <a href="{{ route('services.page') }}" @click="open=false">
                        All Services
                    </a>
                    <a href="{{ route('transformations.page') }}" @click="open=false">
                        Transformations
                    </a>
                 
                </div>
            </div>

            <a href="{{ route('about.page') }}" @click="open=false">About</a>
            <a href="{{ route('contact.page') }}" @click="open=false">Contact</a>

            <a href="{{ route('appointment.page') }}"
               class="bg-emerald-600 text-white text-center py-2 rounded-lg">
                Get Started
            </a>

        </div>
    </div>

</nav>
