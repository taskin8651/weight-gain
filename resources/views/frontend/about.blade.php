@extends('custom.master')

@section('content')

  <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>About Us</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area Two -->
        <div class="about-area-two pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content-two">
                            <div class="section-title">
                                <span>About Us</span>
                                <h2>{{ $about->title ?? 'Change Your Life in the next 90 Days of Practice' }}</h2>
                                <p>
                                   {{ $about->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }}
                                </p>
                            </div>

                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-content-item">
                                        <i class="flaticon-diet"></i>
                                        <h3>Personalized Nutrition Plan</h3>
<p>
Customized meal plans designed to support your health and fitness goals.
</p>                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="about-content-item">
                                        <i class="flaticon-exercise"></i>
                                        <h3>Personalized Exercises Plan</h3>
<p>
Tailored workout routines created to improve strength and overall fitness.
</p>                                    </div>
                                </div>
                            </div>

                            <a href="about.html" class="default-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-6 pe-0">
                        <div class="about-img">
                            <img src="{{ !empty($about->image)
                ? asset('storage/'.$about->image)
                : 'assets/images/about/about-img1.png' }}" alt="Images">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-shape-two">
                <img src="assets/images/shape/shape2.png" alt="About Images">
                <img src="assets/images/shape/shape3.png" alt="About Images">
            </div>
        </div>

        <div class="about-area-two pb-70">
<div class="container">
<div class="row align-items-center">

{{-- LEFT CONTENT --}}
<div class="col-lg-6">
<div class="about-content-two">

<div class="section-title">
<span>About Us</span>

<h2>
{{ $about->title ?? 'Change Your Life in the next 90 Days of Practice' }}
</h2>

<p>
{{ $about->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' }}
</p>

</div>

{{-- OTHER ABOUT ITEMS --}}
<div class="row">

@foreach($aboutItems as $item)

<div class="col-lg-6">
<div class="about-content-item">

<i class="flaticon-diet"></i>

<h3>{{ $item->title }}</h3>

<p>{{ $item->description }}</p>

</div>
</div>

@endforeach

</div>

<a href="{{ route('about') }}" class="default-btn">
Read More
</a>

</div>
</div>


{{-- RIGHT IMAGE --}}
<div class="col-lg-6 pe-0">
<div class="about-img">

<img src="{{ !empty($about->image)
? asset('storage/'.$about->image)
: asset('assets/images/about/about-img1.png') }}"
alt="About Image">

</div>
</div>

</div>
</div>


<div class="about-shape-two">
<img src="{{ asset('assets/images/shape/shape2.png') }}" alt="shape">
<img src="{{ asset('assets/images/shape/shape3.png') }}" alt="shape">
</div>

</div>
        <!-- About Area Two End -->

 <!-- Blog Widget Area -->
      <div class="blog-widget-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="categories-title mb-4">
                <h3>Student Reviews</h3>
            </div>

            <div class="col-lg-12">
                <div class="row justify-content-center">

                    @forelse($videoReviews as $review)

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="blog-item">

                                <div class="video-wrapper">
                                    <iframe 
                                        src="https://www.youtube.com/embed/{{ $review->youtube_id }}"
                                        title="{{ $review->name }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>

                                <div class="content text-center mt-3">
                                    <h5>{{ $review->name }}</h5>
                                    <span>{{ $review->designation }}</span>
                                </div>

                            </div>
                        </div>

                    @empty
                        <div class="col-12 text-center">
                            <p>No Reviews Available</p>
                        </div>
                    @endforelse


                   

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .video-wrapper {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 */
    overflow: hidden;
    border-radius: 10px;
}

.video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}
</style>
        <!-- Blog Widget Area End -->

<div class="testimonials-area ptb-100">
    <div class="container">

        <div class="section-title text-center mb-5">
            <span>Testimonials</span>
            <h2>Customer Satisfaction</h2>
        </div>

        <div class="testimonials-slider owl-carousel owl-theme">

            @forelse($testimonials as $testimonial)

                <div class="testimonials-item text-center">

                    <i class='bx bxs-quote-left'></i>

                    <p>
                        {{ \Illuminate\Support\Str::limit(
                            $testimonial->message ?? 
                            'This program completely changed my lifestyle and helped me achieve my goals!',
                            160
                        ) }}
                    </p>

                    <!-- Rating -->
                    <div class="mb-3">
                        @for($i=1;$i<=5;$i++)
                            <i class="bx bxs-star {{ $i <= ($testimonial->rating ?? 5) ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                    </div>

                    <!-- Client Info -->
                    <div class="content">
                        <img src="{{ !empty($testimonial->image)
                            ? asset('storage/'.$testimonial->image)
                            : 'https://via.placeholder.com/80' }}"
                             class="rounded-circle mb-3"
                             width="80" height="80">

                        <h3>{{ $testimonial->name ?? 'Happy Client' }}</h3>
                        <span>{{ $testimonial->designation ?? 'Fitness Member' }}</span>
                    </div>

                </div>

            @empty

                {{-- Dummy Slides --}}
                @for($i=0;$i<3;$i++)
                    <div class="testimonials-item text-center">
                        <i class='bx bxs-quote-left'></i>

                        <p>
                            Amazing transformation experience. Highly recommend this coaching program!
                        </p>

                        <div class="mb-3 text-warning">
                            ★★★★★
                        </div>

                        <div class="content">
                            <img src="https://via.placeholder.com/80"
                                 class="rounded-circle mb-3"
                                 width="80" height="80">

                            <h3>Happy Client</h3>
                            <span>Fitness Member</span>
                        </div>
                    </div>
                @endfor

            @endforelse

        </div>

    </div>
</div>

<div class="brand-area ptb-100 border-top">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h2>Trusted By</h2>
            <p>Partner brands and trusted collaborations.</p>
        </div>

        <div class="brand-slider owl-carousel owl-theme">

            @forelse($brands as $brand)

                <div class="brand-item text-center">
                    <img src="{{ !empty($brand->logo)
                        ? asset('storage/'.$brand->logo)
                        : 'https://via.placeholder.com/150x80' }}"
                         class="img-fluid brand-logo">
                </div>

            @empty

                @for($i=0;$i<6;$i++)
                    <div class="brand-item text-center">
                        <img src="https://via.placeholder.com/150x80"
                             class="img-fluid brand-logo">
                    </div>
                @endfor

            @endforelse

        </div>

    </div>
</div>

@endsection
