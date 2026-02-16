@php
    $currentRoute = Route::currentRouteName();

    $pageTitles = [
        'programs.page' => 'Programs',
        'services.page' => 'Services',
        'about.page'    => 'About Us',
        'contact.page'  => 'Contact',
        'appointment.page' => 'Book Appointment',
        'diet.page' => 'Diet Plans',
        'diet.detail' => 'Diet Plan Details',
        'transformations.page' => 'Transformations',
        'transformations.detail' => 'Transformation Details'
    ];

    $currentTitle = $pageTitles[$currentRoute] ?? 'Page';
@endphp

<section class="relative h-[300px] flex items-center justify-center text-center">

    {{-- Static Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1600');">
    </div>

    {{-- Dark Overlay --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- Content --}}
    <div class="relative z-10 text-white px-6">

        <h1 class="text-3xl md:text-4xl font-bold mb-4">
            {{ $currentTitle }}
        </h1>

        <nav class="text-sm text-gray-300 flex justify-center items-center gap-2">
            <a href="{{ route('home') }}"
               class="hover:text-emerald-400 transition">
                Home
            </a>

            <span>/</span>

            <span class="text-white font-medium">
                {{ $currentTitle }}
            </span>
        </nav>

    </div>

</section>
