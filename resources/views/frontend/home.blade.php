@extends('frontend.layouts.app')

@section('content')

{{-- HERO SLIDER --}}
<section class="relative">

    <div class="swiper heroSwiper h-[90vh]">

        <div class="swiper-wrapper">

            {{-- Slide 1 --}}
            <div class="swiper-slide relative">

                {{-- Background --}}
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ (!empty($hero) && !empty($hero->background_image))
                        ? asset('storage/'.$hero->background_image)
                        : 'https://images.unsplash.com/photo-1554284126-aa88f22d8b74?q=80&w=1600' }}');">
                </div>

                {{-- Overlay --}}
                <div class="absolute inset-0 bg-black/60"></div>

                {{-- Content --}}
                <div class="relative z-10 flex items-center justify-center h-full text-center px-6">

                    <div class="max-w-4xl text-white">

                        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 fadeUp">
                            {{ $hero->title ?? 'Transform Your Body & Mind' }}
                        </h1>

                        <p class="text-lg md:text-xl text-gray-200 mb-8 fadeUp delay-200">
                            {{ $hero->description ?? 'Personalized coaching for sustainable weight loss and healthy weight gain.' }}
                        </p>

                        <a href="{{ route('appointment.page') }}"
                           class="bg-emerald-600 px-8 py-3 rounded-lg text-white text-lg font-semibold hover:bg-emerald-700 transition shadow-lg fadeUp delay-300">
                            {{ $hero->button_text ?? 'Explore Programs' }}
                        </a>

                    </div>

                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide relative">

                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('https://images.unsplash.com/photo-1594737625785-cb72a2b3a61d?q=80&w=1600');">
                </div>

                <div class="absolute inset-0 bg-black/60"></div>

                <div class="relative z-10 flex items-center justify-center h-full text-center px-6">
                    <div class="max-w-4xl text-white">

                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            Achieve Your Dream Physique
                        </h1>

                        <p class="text-lg md:text-xl text-gray-200 mb-8">
                            Structured training and expert guidance tailored for your goals.
                        </p>

                        <a href="{{ route('appointment.page') }}"
                           class="bg-emerald-600 px-8 py-3 rounded-lg text-white text-lg font-semibold hover:bg-emerald-700 transition shadow-lg">
                            Start Today
                        </a>

                    </div>
                </div>

            </div>

        </div>

        {{-- Pagination --}}
        <div class="swiper-pagination"></div>

    </div>

</section>


<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".heroSwiper", {
        loop: true,
        effect: "fade",
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".heroSwiper .swiper-pagination",
            clickable: true,
        },
    });

});
</script>


<style>
.heroSwiper {
    position: relative;
}

.swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
}

.fadeUp {
    animation: fadeUp 1s ease forwards;
    opacity: 0;
}

.fadeUp.delay-200 { animation-delay: 0.2s; }
.fadeUp.delay-300 { animation-delay: 0.3s; }

@keyframes fadeUp {
    from {
        transform: translateY(40px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>




{{-- ABOUT SECTION --}}
<section id="about" class="py-20 bg-emerald-50">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        {{-- Image --}}
        <div>
            @if(!empty(optional($about)->image))
                <img src="{{ asset('storage/'.$about->image) }}"
                     class="rounded-2xl shadow-lg w-full">
            @else
                <img src="https://via.placeholder.com/600x500"
                     class="rounded-2xl shadow-lg w-full">
            @endif
        </div>

        {{-- Content --}}
        <div>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">
                {{ optional($about)->title ?? 'About Your Coach' }}
            </h2>

            <p class="text-slate-600 leading-relaxed mb-6">
                {{ optional($about)->description ?? 'We provide personalized fitness coaching focused on sustainable results, balanced nutrition, and long-term health transformation.' }}
            </p>

            <div class="grid grid-cols-2 gap-6 mt-8">
                <div>
                    <div class="text-3xl font-bold text-emerald-600">10+</div>
                    <div class="text-sm text-slate-600">Years Experience</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-emerald-600">500+</div>
                    <div class="text-sm text-slate-600">Happy Clients</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="{{route('about.page') }}"
                   class="bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition shadow">
                    Start Your Journey
                </a>
            </div>

        </div>

    </div>

</section>
{{-- PROGRAMS SECTION --}}
<section id="programs" class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-6">

       <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-14 gap-6">

    {{-- Left Content --}}
    <div>
        <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
            Our Programs
        </h2>

        <p class="mt-3 text-slate-600">
            Choose a personalized program designed for your fitness goals.
        </p>
    </div>

    {{-- Right Button --}}
    <div>
        <a href="{{ route('programs.page') }}"
           class="inline-flex items-center gap-2 bg-emerald-600 text-white px-5 py-2.5 rounded-lg
                  hover:bg-emerald-700 transition shadow-md">

            View All

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-4 w-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7" />
            </svg>

        </a>
    </div>

</div>


        <div class="swiper programSwiper">
            <div class="swiper-wrapper">

                @forelse($programs as $program)
                <div class="swiper-slide">

                    <div class="program-card bg-white border rounded-2xl shadow-sm p-6 flex flex-col h-full transition-all duration-500">

                        {{-- Image --}}
                        <img src="{{ !empty($program->image)
                            ? asset('storage/'.$program->image)
                            : 'https://via.placeholder.com/400x300' }}"
                             class="rounded-xl mb-5 h-48 w-full object-cover">

                        {{-- Title --}}
                        <h3 class="text-xl font-semibold text-slate-800 mb-2">
                            {{ $program->title ?? 'Fitness Program' }}
                        </h3>

                        {{-- Type --}}
                        <span class="px-3 py-1 text-xs font-medium rounded-full
                            {{ ($program->type ?? 'weight_loss') == 'weight_loss'
                                ? 'bg-emerald-100 text-emerald-600'
                                : 'bg-blue-100 text-blue-600' }}">
                            {{ ucfirst(str_replace('_',' ', $program->type ?? 'weight_loss')) }}
                        </span>

                        {{-- Description --}}
                        <p class="text-sm text-slate-600 my-4 flex-grow">
                            {{ \Illuminate\Support\Str::limit($program->description ?? 'Custom program designed for your body goals.', 100) }}
                        </p>

                        {{-- Price --}}
                        <div class="text-sm text-slate-500 mb-5">
                            Duration: {{ $program->duration ?? '12 Weeks' }}
                            <div class="font-semibold text-emerald-600 mt-1">
                                ₹ {{ $program->price ?? '9999' }}
                            </div>
                        </div>

                        <a href="{{ route('appointment.page') }}"
                           class="mt-auto bg-emerald-600 text-white text-center px-5 py-2 rounded-lg hover:bg-emerald-700 transition">
                            Join Now
                        </a>

                    </div>

                </div>
                @empty

                {{-- Dummy Slides --}}
                @for($i=0;$i<8;$i++)
                <div class="swiper-slide">
                    <div class="program-card bg-white border rounded-2xl shadow-sm p-6">
                        <img src="https://via.placeholder.com/400x300"
                             class="rounded-xl mb-5 h-48 w-full object-cover">

                        <h3 class="text-xl font-semibold mb-2">
                            Weight Loss Program
                        </h3>

                        <span class="px-3 py-1 text-xs rounded-full bg-emerald-100 text-emerald-600">
                            Weight Loss
                        </span>

                        <p class="text-sm text-slate-600 my-4">
                            Personalized coaching program for sustainable results.
                        </p>

                        <div class="text-sm text-slate-500 mb-5">
                            Duration: 12 Weeks
                            <div class="font-semibold text-emerald-600 mt-1">
                                ₹ 9999
                            </div>
                        </div>

                        <a href="{{ route('appointment.page') }}"
                           class="bg-emerald-600 text-white px-5 py-2 rounded-lg">
                            Join Now
                        </a>
                    </div>
                </div>
                @endfor

                @endforelse

            </div>

            <div class="swiper-pagination mt-8"></div>

        </div>

    </div>

</section>


<style>
.programSwiper {
    padding-bottom: 80px;
}

.programSwiper .swiper-slide {
    width: 320px;
    opacity: 0.5;
    transform: scale(0.85);
    transition: all 0.5s ease;
}

.programSwiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1.1);
    z-index: 10;
}

.programSwiper .swiper-slide-active .program-card {
    box-shadow: 0 25px 60px rgba(16, 185, 129, 0.35);
}
</style>



<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".programSwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: "auto",
        speed: 900,

        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 180,
            modifier: 1,
            slideShadows: false,
        },

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        }
    });

});
</script>


{{-- SERVICES SECTION --}}
<section id="services" class="py-24 bg-gradient-to-b from-white to-emerald-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between mb-12">

    {{-- Left Content --}}
    <div class="max-w-xl">

        <h2 class="text-2xl md:text-4xl font-bold text-slate-800">
            Our Services
        </h2>

        <p class="mt-2 md:mt-4 text-sm md:text-base text-slate-600">
            Personalized fitness and nutrition services designed to help you achieve lasting results.
        </p>

    </div>

    {{-- Right Button --}}
    <div class="shrink-0">
        <a href="{{ route('services.page') }}"
           class="text-sm md:text-base border border-emerald-600 text-emerald-600
                  px-4 md:px-5 py-2 rounded-lg
                  hover:bg-emerald-600 hover:text-white
                  transition duration-300">

            View All →

        </a>
    </div>

</div>


        <div class="swiper serviceSwiper">
            <div class="swiper-wrapper">

                @forelse($services as $service)

                <div class="swiper-slide">
                    <div class="service-card bg-white rounded-2xl p-8 text-center transition-all duration-500">

                        <div class="mb-6">
                            <img src="{{ !empty($service->image_one)
                                ? asset('storage/'.$service->image_one)
                                : 'https://via.placeholder.com/80x80' }}"
                                 class="mx-auto h-20 w-20 object-cover rounded-full shadow service-icon">
                        </div>

                        <h3 class="text-lg font-semibold text-slate-800 mb-3">
                            {{ $service->title ?? 'Personal Coaching' }}
                        </h3>

                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $service->short_description ?? 'Customized workout and nutrition plans tailored to your goals.' }}
                        </p>

                    </div>
                </div>

                @empty

                {{-- Dummy Slides --}}
                @for($i=0;$i<8;$i++)
                <div class="swiper-slide">
                    <div class="service-card bg-white rounded-2xl p-8 text-center">

                        <div class="mb-6">
                            <img src="https://via.placeholder.com/80x80"
                                 class="mx-auto h-20 w-20 rounded-full shadow service-icon">
                        </div>

                        <h3 class="text-lg font-semibold mb-3">
                            Premium Coaching
                        </h3>

                        <p class="text-sm text-slate-600">
                            Professional guidance to help you reach your ideal fitness level.
                        </p>

                    </div>
                </div>
                @endfor

                @endforelse

            </div>

            <div class="swiper-pagination mt-8"></div>

        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".serviceSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 800,

        autoplay: {
            delay: 2800,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".serviceSwiper .swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

});
</script>


<style>
.serviceSwiper {
    padding-bottom: 70px;
}

.serviceSwiper .swiper-slide {
    opacity: 0.6;
    transform: scale(0.9);
    transition: all 0.4s ease;
}

.serviceSwiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
}

.service-card:hover .service-icon {
    transform: scale(1.1);
}
</style>



{{-- DIET PLANS SECTION --}}
<section id="diet-plans" class="py-20 bg-emerald-50">

    <div class="max-w-7xl mx-auto px-6">

      <div class="flex items-center justify-between mb-12">

    {{-- Left Content --}}
    <div class="max-w-xl">

        <h2 class="text-2xl md:text-4xl font-bold text-slate-800">
            Diet Plans
        </h2>

        <p class="mt-2 md:mt-4 text-sm md:text-base text-slate-600">
            Balanced and personalized meal plans designed for your body goals.
        </p>

    </div>

    {{-- Right Button --}}
    <div class="shrink-0">
        <a href="{{ route('diet.page') }}"
           class="text-sm md:text-base border border-emerald-600 text-emerald-600
                  px-4 md:px-5 py-2 rounded-lg
                  hover:bg-emerald-600 hover:text-white
                  transition duration-300">

            View All →

        </a>
    </div>

</div>


        <div class="grid md:grid-cols-3 gap-8">

            @forelse($dietPlans as $plan)

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-md transition p-6 flex flex-col">

                {{-- Image --}}
                @if(!empty($plan->image))
                    <img src="{{ asset('storage/'.$plan->image) }}"
                         class="rounded-xl mb-5 h-44 w-full object-cover">
                @else
                    <img src="https://via.placeholder.com/400x250"
                         class="rounded-xl mb-5 h-44 w-full object-cover">
                @endif

                {{-- Title --}}
                <h3 class="text-xl font-semibold text-slate-800 mb-2">
                    {{ $plan->title ?? 'Custom Meal Plan' }}
                </h3>

                {{-- Description --}}
                <p class="text-sm text-slate-600 mb-4 flex-grow">
                    {{ Str::limit($plan->description ?? 'Healthy, nutrient-balanced meals tailored to your fitness goals.', 100) }}
                </p>

                {{-- Price --}}
                <div class="text-emerald-600 font-semibold mb-4">
                    ₹ {{ $plan->price ?? '999' }}
                </div>

                {{-- CTA --}}
                <a href="{{ route('diet.detail',$plan->id) }}"
                   class="bg-emerald-600 text-white text-center px-5 py-2 rounded-lg
                          hover:bg-emerald-700 transition">
                    Get Plan
                </a>

            </div>

            @empty

            {{-- Dummy Plans if No Data --}}

            @for($i=0; $i<3; $i++)
            <div class="bg-white rounded-2xl shadow-sm p-6 text-center">

                <img src="https://via.placeholder.com/400x250"
                     class="rounded-xl mb-5 h-44 w-full object-cover">

                <h3 class="text-xl font-semibold text-slate-800 mb-2">
                    Healthy Diet Plan
                </h3>

                <p class="text-sm text-slate-600 mb-4">
                    Scientifically structured meal plans to support your fitness transformation.
                </p>

                <div class="text-emerald-600 font-semibold mb-4">
                    ₹ 999
                </div>

                <a href="{{ route('diet.page') }}"
                   class="bg-emerald-600 text-white px-5 py-2 rounded-lg">
                    Get Plan
                </a>

            </div>
            @endfor

            @endforelse

        </div>

    </div>

</section>

{{-- TRANSFORMATIONS SECTION --}}
<section id="transformations" class="py-24 bg-gradient-to-b from-white to-emerald-50">

    <div class="max-w-7xl mx-auto px-6">

       <div class="flex items-center justify-between mb-14">

    {{-- Left Content --}}
    <div class="max-w-xl">

        <h2 class="text-2xl md:text-4xl font-bold text-slate-800">
            Real Transformations
        </h2>

        <p class="mt-2 md:mt-4 text-sm md:text-base text-slate-600">
            See the real results achieved by our clients.
        </p>

    </div>

    {{-- Right Button --}}
    <div class="shrink-0">
        <a href="{{ route('transformations.page') }}"
           class="text-sm md:text-base border border-emerald-600 text-emerald-600
                  px-4 md:px-5 py-2 rounded-lg
                  hover:bg-emerald-600 hover:text-white
                  transition duration-300">

            View All →

        </a>
    </div>

</div>


        <div class="swiper transformSwiper">
            <div class="swiper-wrapper">

                @forelse($transformations as $item)

                <div class="swiper-slide">
                    <div class="transform-card bg-white rounded-2xl p-6 shadow transition-all duration-500">

                        <h3 class="text-lg font-semibold text-slate-800 mb-4 text-center">
                            {{ $item->name ?? 'Client Name' }}
                        </h3>

                        {{-- Before / After --}}
                        <div class="relative overflow-hidden rounded-xl mb-4">

                            <div class="grid grid-cols-2">

                                <img src="{{ !empty($item->before_image)
                                    ? asset('storage/'.$item->before_image)
                                    : 'https://via.placeholder.com/300x300' }}"
                                     class="h-64 w-full object-cover">

                                <img src="{{ !empty($item->after_image)
                                    ? asset('storage/'.$item->after_image)
                                    : 'https://via.placeholder.com/300x300' }}"
                                     class="h-64 w-full object-cover">

                            </div>

                            <div class="absolute top-2 left-2 bg-black/60 text-white text-xs px-3 py-1 rounded">
                                Before
                            </div>

                            <div class="absolute top-2 right-2 bg-emerald-600 text-white text-xs px-3 py-1 rounded">
                                After
                            </div>

                        </div>

                        <div class="text-center mb-3">
                            <span class="px-3 py-1 text-xs rounded-full
                                {{ ($item->goal ?? 'weight_loss') == 'weight_loss'
                                    ? 'bg-emerald-100 text-emerald-600'
                                    : 'bg-blue-100 text-blue-600' }}">
                                {{ ucfirst(str_replace('_',' ', $item->goal ?? 'weight_loss')) }}
                            </span>
                        </div>

                        <p class="text-sm text-slate-600 text-center">
                            {{ \Illuminate\Support\Str::limit($item->description ?? 'Amazing fitness transformation achieved through dedication and proper nutrition.', 100) }}
                        </p>

                    </div>
                </div>

                @empty

                {{-- Dummy Slides --}}
                @for($i=0;$i<3;$i++)
                <div class="swiper-slide">
                    <div class="transform-card bg-white rounded-2xl p-6 shadow">

                        <h3 class="text-lg font-semibold text-center mb-4">
                            Transformation Story
                        </h3>

                        <div class="grid grid-cols-2 gap-2 mb-4">
                            <img src="https://via.placeholder.com/300x300"
                                 class="h-64 w-full object-cover rounded-lg">
                            <img src="https://via.placeholder.com/300x300"
                                 class="h-64 w-full object-cover rounded-lg">
                        </div>

                        <div class="text-center">
                            <span class="px-3 py-1 text-xs rounded-full bg-emerald-100 text-emerald-600">
                                Weight Loss
                            </span>
                        </div>

                        <p class="text-sm text-slate-600 text-center mt-3">
                            Real results achieved with consistency and coaching.
                        </p>

                    </div>
                </div>
                @endfor

                @endforelse

            </div>

            <div class="swiper-pagination mt-10"></div>

        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".transformSwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        speed: 900,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".transformSwiper .swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

});
</script>

<style>
.transformSwiper {
    padding-bottom: 80px;
}

.transformSwiper .swiper-slide {
    opacity: 0.5;
    transform: scale(0.9);
    transition: all 0.5s ease;
}

.transformSwiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1.05);
    z-index: 10;
}

.transformSwiper .swiper-slide-active .transform-card {
    box-shadow: 0 25px 60px rgba(16, 185, 129, 0.25);
}
</style>


{{-- TESTIMONIALS SECTION --}}
<section id="testimonials" class="py-24 bg-emerald-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
                What Our Clients Say
            </h2>
            <p class="mt-4 text-slate-600">
                Real feedback from people who transformed their lives.
            </p>
        </div>

        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper">

                @forelse($testimonials as $testimonial)

                <div class="swiper-slide">
                    <div class="testimonial-card bg-white rounded-2xl shadow-md p-8 text-center transition-all duration-500">

                        {{-- Image --}}
                        <div class="mb-5">
                            <img src="{{ !empty($testimonial->image)
                                ? asset('storage/'.$testimonial->image)
                                : 'https://via.placeholder.com/100' }}"
                                 class="mx-auto h-20 w-20 rounded-full object-cover shadow-lg">
                        </div>

                        {{-- Name --}}
                        <h3 class="text-lg font-semibold text-slate-800">
                            {{ $testimonial->name ?? 'Happy Client' }}
                        </h3>

                        <p class="text-xs text-slate-500 mb-4">
                            {{ $testimonial->designation ?? 'Fitness Member' }}
                        </p>

                        {{-- Rating --}}
                        <div class="flex justify-center mb-4">
                            @for($i=1;$i<=5;$i++)
                                <span class="text-lg {{ $i <= ($testimonial->rating ?? 5) ? 'text-yellow-400' : 'text-gray-300' }}">
                                    ★
                                </span>
                            @endfor
                        </div>

                        {{-- Message --}}
                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ \Illuminate\Support\Str::limit($testimonial->message ?? 'This program completely changed my lifestyle and helped me achieve my goals!', 140) }}
                        </p>

                    </div>
                </div>

                @empty

                {{-- Dummy Slides --}}
                @for($i=0;$i<3;$i++)
                <div class="swiper-slide">
                    <div class="testimonial-card bg-white rounded-2xl shadow-md p-8 text-center">

                        <img src="https://via.placeholder.com/100"
                             class="mx-auto h-20 w-20 rounded-full shadow-lg mb-5">

                        <h3 class="text-lg font-semibold">
                            Happy Client
                        </h3>

                        <p class="text-xs text-slate-500 mb-4">
                            Fitness Member
                        </p>

                        <div class="text-yellow-400 text-lg mb-4">
                            ★★★★★
                        </div>

                        <p class="text-sm text-slate-600">
                            Amazing transformation experience. Highly recommend this coaching program!
                        </p>

                    </div>
                </div>
                @endfor

                @endforelse

            </div>

            <div class="swiper-pagination mt-10"></div>
        </div>

    </div>

</section>

<style>
.testimonialSwiper {
    padding-bottom: 80px;
}

.testimonialSwiper .swiper-slide {
    opacity: 0.5;
    transform: scale(0.9);
    transition: all 0.4s ease;
}

.testimonialSwiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1.05);
    z-index: 10;
}

.testimonialSwiper .swiper-slide-active .testimonial-card {
    box-shadow: 0 25px 60px rgba(16, 185, 129, 0.25);
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        speed: 800,

        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".testimonialSwiper .swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

});
</script>

{{-- BRANDS SECTION --}}
<section id="brands" class="py-20 bg-white border-t">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                Trusted By
            </h2>
            <p class="mt-3 text-slate-600 text-sm">
                Partner brands and trusted collaborations.
            </p>
        </div>

        <div class="swiper brandSwiper">
            <div class="swiper-wrapper items-center">

                @forelse($brands as $brand)

                <div class="swiper-slide flex justify-center">
                    <img src="{{ !empty($brand->logo)
                        ? asset('storage/'.$brand->logo)
                        : 'https://via.placeholder.com/150x80' }}"
                         class="h-16 object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition duration-300">
                </div>

                @empty

                {{-- Dummy Logos --}}
                @for($i=0;$i<6;$i++)
                <div class="swiper-slide flex justify-center">
                    <img src="https://via.placeholder.com/150x80"
                         class="h-16 object-contain grayscale opacity-70">
                </div>
                @endfor

                @endforelse

            </div>
        </div>

    </div>

</section>
<script>
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".brandSwiper", {
        slidesPerView: 2,
        spaceBetween: 40,
        loop: true,
        speed: 2000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },

        breakpoints: {
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 }
        }
    });

});
</script>

<style>
.brandSwiper .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>



{{-- CONTACT SECTION --}}
<section id="contact" class="py-20 bg-emerald-600 text-white">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        {{-- LEFT SIDE --}}
        <div>

            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Start Your Fitness Journey Today
            </h2>

            <p class="mb-8 text-emerald-100">
                Have questions or ready to transform your body?
                Get in touch and let's build your personalized plan.
            </p>

            <div class="space-y-4 text-sm">

                <div>
                    📧 {{ $setting->email ?? 'info@fitness.com' }}
                </div>

                <div>
                    📞 {{ $setting->phone ?? '+91 98765 43210' }}
                </div>

                <div>
                    📍 {{ $setting->address ?? 'Your Fitness Studio Address' }}
                </div>

            </div>

        </div>

        {{-- RIGHT SIDE FORM --}}
        <div class="bg-white text-slate-700 p-8 rounded-2xl shadow-lg">

            @if(session('contact_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('contact_success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text" name="name"
                        placeholder="Your Name"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>

                <div class="mb-4">
                    <input type="email" name="email"
                        placeholder="Your Email"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>

                <div class="mb-4">
                    <input type="text" name="phone"
                        placeholder="Phone Number"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-emerald-500">
                </div>

                <div class="mb-6">
                    <textarea name="message"
                        rows="4"
                        placeholder="Your Message"
                        required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-emerald-600 text-white py-3 rounded-lg
                           hover:bg-emerald-700 transition">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>


@endsection
