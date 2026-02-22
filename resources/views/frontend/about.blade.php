@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')


<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <img src="{{ !empty($about->image)
                ? asset('storage/'.$about->image)
                : 'https://via.placeholder.com/600x500' }}"
                 class="rounded-2xl shadow-lg w-full">
        </div> 

        <div>
            <h1 class="text-4xl font-bold text-slate-800 mb-6">
                {{ $about->title ?? 'About Us' }}
            </h1>

            <p class="text-slate-600 leading-relaxed">
                {{ $about->description ?? 'We provide personalized fitness coaching focused on long-term sustainable results.' }}
            </p>

            <div class="mt-8">
                <a href="{{ route('contact.page') }}"
                   class="bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition">
                    Start Your Journey
                </a>
            </div>
        </div>

    </div>
</section>


{{-- VIDEO REVIEWS --}}
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-16 gap-6">

    <h2 class="text-3xl md:text-4xl font-bold text-slate-800">
        Customer Video Reviews
    </h2>

    <a href="{{ route('video-reviews.page') }}"
       class="self-start md:self-auto inline-flex items-center gap-2 
              bg-emerald-600 text-white px-6 py-2.5 rounded-lg 
              hover:bg-emerald-700 transition duration-300 shadow-md hover:shadow-lg">

        View All
        <span class="text-lg">→</span>
    </a>

</div>

        {{-- 4 Column Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @forelse($videoReviews as $review)

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group cursor-pointer hover:shadow-2xl transition duration-300"
                 onclick="openVideo('{{ $review->youtube_id }}')">

                {{-- Thumbnail --}}
                <div class="relative">

                    <img src="{{ $review->thumbnail 
                        ? asset('storage/'.$review->thumbnail)
                        : 'https://img.youtube.com/vi/'.$review->youtube_id.'/hqdefault.jpg' }}"
                         class="w-full h-56 object-cover">

                    {{-- Play Button --}}
                    <div class="absolute inset-0 flex items-center justify-center bg-black/40 group-hover:bg-black/60 transition">

                        <div class="w-14 h-14 bg-emerald-600 rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition duration-300">
                            ▶
                        </div>

                    </div>

                </div>

                <div class="p-5 text-center">

                    <h3 class="text-md font-semibold text-slate-800">
                        {{ $review->name }}
                    </h3>

                    <p class="text-xs text-slate-500">
                        {{ $review->designation }}
                    </p>

                </div>

            </div>

            @empty
                <p class="col-span-4 text-center text-slate-500">
                    No Video Reviews Available
                </p>
            @endforelse

        </div>

    </div>

</section>

{{-- LIGHTBOX MODAL --}}
<div id="videoModal"
     class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden z-50 opacity-0 transition-opacity duration-300">

    <div class="absolute inset-0 flex items-center justify-center px-4">

        <div id="videoBox"
             class="relative w-full max-w-4xl transform scale-90 opacity-0 transition-all duration-300">

            {{-- Close Button --}}
            <button onclick="closeVideo()"
                    class="absolute -top-10 right-0 text-white text-3xl hover:text-emerald-400 transition">
                ✕
            </button>

            {{-- Video --}}
            <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl bg-black">
                <iframe id="youtubeFrame"
                        class="w-full h-full"
                        src=""
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                </iframe>
            </div>

        </div>

    </div>

</div>

<script>

function openVideo(videoId) {

    const modal = document.getElementById('videoModal');
    const box = document.getElementById('videoBox');

    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.remove('opacity-0');
        box.classList.remove('scale-90', 'opacity-0');
        box.classList.add('scale-100', 'opacity-100');
    }, 10);

    document.getElementById('youtubeFrame').src =
        "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
}

function closeVideo() {

    const modal = document.getElementById('videoModal');
    const box = document.getElementById('videoBox');

    modal.classList.add('opacity-0');
    box.classList.remove('scale-100', 'opacity-100');
    box.classList.add('scale-90', 'opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        document.getElementById('youtubeFrame').src = "";
    }, 300);
}

// ESC Close
document.addEventListener("keydown", function(e){
    if(e.key === "Escape") closeVideo();
});

// Outside Click Close
document.getElementById('videoModal').addEventListener("click", function(e){
    if(e.target === this) closeVideo();
});

</script>


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

@endsection
