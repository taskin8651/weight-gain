@extends('frontend.layouts.app')

@section('content')

@include('frontend.partials.breadcrumb')

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="mb-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">
                Customer Video Reviews
            </h1>
            <p class="text-slate-600 max-w-2xl mx-auto">
                Real transformations and honest feedback from our happy clients.
            </p>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @forelse($videoReviews as $review)

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group cursor-pointer hover:shadow-2xl transition duration-300"
                 onclick="openVideo('{{ $review->youtube_id }}')">

                <div class="relative">

                    <img src="{{ $review->thumbnail 
                        ? asset('storage/'.$review->thumbnail)
                        : 'https://img.youtube.com/vi/'.$review->youtube_id.'/hqdefault.jpg' }}"
                         class="w-full h-56 object-cover">

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

        {{-- Pagination --}}
        <div class="mt-16">
            {{ $videoReviews->links() }}
        </div>

    </div>

</section>


{{-- LIGHTBOX MODAL --}}
<div id="videoModal"
     class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden z-50 opacity-0 transition-opacity duration-300">

    <div class="absolute inset-0 flex items-center justify-center px-4">

        <div id="videoBox"
             class="relative w-full max-w-4xl transform scale-90 opacity-0 transition-all duration-300">

            <button onclick="closeVideo()"
                    class="absolute -top-10 right-0 text-white text-3xl hover:text-emerald-400 transition">
                ✕
            </button>

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

document.addEventListener("keydown", function(e){
    if(e.key === "Escape") closeVideo();
});

document.getElementById('videoModal').addEventListener("click", function(e){
    if(e.target === this) closeVideo();
});

</script>

@endsection