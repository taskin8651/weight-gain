@extends('custom.master')

@section('content')
    
 <!-- Banner Area -->
        <div class="banner-slider-area">
            <div class="banner-slider owl-carousel owl-theme">
    @foreach($heroes as $hero)
        <div class="banner-item">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-item-content">
                            <h1>{{ $hero->title }}</h1>
                            <p>{{ $hero->description }}</p>

                            <div class="banner-btn">
                                <a href="{{ $hero->button_link }}" class="default-btn">
                                    {{ $hero->button_text }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pe-0">
                        <div class="banner-item-img">
                            <img src="{{ asset('storage/'.$hero->background_image) }}" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

            <div class="banner-shape-two">
                <img src="assets/images/shape/shape1.png" alt="Banner Images">
                <img src="assets/images/shape/shape2.png" alt="Banner Images">
                <img src="assets/images/shape/shape3.png" alt="Banner Images">
            </div>
        </div>
        <!-- Banner Area End -->


         <!-- Banner Bottom Area -->
        <div class="banner-bottom-area pt-50 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="banner-bottom-item">
                            <i class="flaticon-calendar-1"></i>
                            <h3>Healthy Diet</h3>
        <p>
A healthy diet is the cornerstone of a strong and energetic lifestyle. Eating a balanced combination of fresh fruits, vegetables, whole grains, and protein-rich foods provides the body with essential nutrients needed for daily performance. Proper diet helps maintain a healthy weight, supports digestion, improves immunity, and keeps energy levels stable throughout the day. Instead of following extreme restrictions, focusing on natural and nutrient-rich foods builds sustainable eating habits that promote long-term wellness and overall physical health.
        </p>                  
  <a href="{{ route('programs.page') }}" class="learn-btn">Learn More</a>
                            <div class="top-shape">
                                <img src="assets/images/shape/shape5.png" alt="Images">
                                <img src="assets/images/shape/shape6.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="banner-bottom-item">
                            <i class="flaticon-diet"></i>
                            <h3>Natural Foods</h3>
<p>
Natural foods play a vital role in maintaining a balanced and healthy lifestyle. Fresh fruits, vegetables, whole grains, nuts, and lean proteins provide essential nutrients that nourish the body and support overall wellness. Choosing minimally processed foods helps improve digestion, boost immunity, and maintain stable energy levels throughout the day. A diet rich in natural ingredients reduces the risk of lifestyle-related diseases and promotes long-term health. Making mindful food choices every day creates a strong nutritional foundation for a vibrant and active life.
</p>                            <a href="{{ route('programs.page') }}" class="learn-btn">Learn More</a>
                            <div class="top-shape">
                                <img src="assets/images/shape/shape5.png" alt="Images">
                                <img src="assets/images/shape/shape6.png" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="banner-bottom-item">
                            <i class="flaticon-plan"></i>
                            <h3>Nutrition Plans</h3>
<p>
A structured nutrition plan is essential for achieving lasting health and fitness goals. Personalized meal planning ensures the right balance of proteins, carbohydrates, healthy fats, vitamins, and minerals required for optimal body function. Proper nutrition supports weight management, enhances metabolism, improves recovery, and increases daily energy levels. Instead of restrictive dieting, a well-designed plan focuses on sustainable eating habits that fit your lifestyle. With the right guidance and consistency, nutrition becomes a powerful tool for long-term wellness and overall physical transformation.
</p>                            <a href="{{ route('programs.page') }}" class="learn-btn">Learn More</a>
                            <div class="top-shape">
                                <img src="assets/images/shape/shape5.png" alt="Images">
                                <img src="assets/images/shape/shape6.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Bottom Area End -->

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

                            <a href="{{ route('about.page') }}" class="default-btn">Read More</a>
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


             <div class="about-area-two pb-70">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">
<div class="about-content-item">

<i class="flaticon-diet"></i>

<h3>{{ $about2->title }}</h3>

<p>{{ $about2->description }}</p>

</div>
</div>

<div class="col-lg-6 pe-0">
<div class="about-img">
<img src="{{ !empty($about2->image) 
? asset('storage/'.$about2->image) 
: asset('assets/images/about/about-img1.png') }}" 
alt="About Image">
</div>
</div>

</div>
</div>
</div>


<div class="about-area-two pb-70">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 order-lg-2">
<div class="about-content-item">

<i class="flaticon-diet"></i>

<h3>{{ $about3->title }}</h3>

<p>{{ $about3->description }}</p>

</div>
</div>

<div class="col-lg-6 pe-0 order-lg-1">
<div class="about-img">
<img src="{{ !empty($about3->image) 
? asset('storage/'.$about3->image) 
: asset('assets/images/about/about-img1.png') }}" 
alt="About Image">
</div>
</div>

</div>
</div>
</div>
        <!-- About Area Two End -->


     <!-- Services Area -->
<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>What We Offer</span>
            <h2>Diet & Nutritionist Courses</h2>
        </div>

        <div class="row pt-45 justify-content-center">

            @foreach($programs as $program)
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <a href="{{ route('program.details', $program->id) }}">
                            <img src="{{ asset('storage/'.$program->image) }}" alt="{{ $program->title }}">
                        </a>

                        <div class="content">
                            <h3>
                                <a href="{{ route('program.details', $program->id) }}">
                                    {{ $program->title }}
                                </a>
                            </h3>

                            <p>
                                {{ Str::limit($program->description, 120) }}
                            </p>

                            <a href="{{ route('program.details', $program->id) }}" class="learn-btn">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services Area End -->


 <!-- Work Area -->
        <div class="work-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>How IT Works</span>
                    <h2>4 Easy Steps For Happy Life</h2>
                </div>
                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg1">
                            <div class="content">
                                <i class="flaticon-contact-book"></i>
                                <h3>Contact Us</h3>
<p>
Reach out to us and start your personalized wellness journey today.
</p>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg2">
                            <div class="content">
                                <i class="flaticon-calendar-1"></i>
                                <h3>Appointment</h3>
<p>
Book your consultation session at your convenient date and time.
</p>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg3">
                            <div class="content">
                                <i class="flaticon-research"></i>
                                <h3>Analysis</h3>
<p>
We assess your health goals and create a tailored action plan.
</p>                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg4">
                            <div class="content">
                                <i class="flaticon-happiness"></i>
                                <h3>Happy Life</h3>
<p>
Achieve lasting fitness results and enjoy a healthier lifestyle.
</p>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Work Area End -->


         <!-- Appointment Area -->
        <div class="appointment-area pt-100 pb-70">
            <div class="container">
                <div class="appointment-form">
                    <h2>Make an Appointment</h2>
                   <form action="{{ route('appointment.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" 
                       name="name" 
                       class="form-control" 
                       value="{{ old('name') }}"
                       placeholder="Name*">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <input type="email" 
                       name="email" 
                       class="form-control"
                       value="{{ old('email') }}"
                       placeholder="Email*">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" 
                       name="phone" 
                       class="form-control"
                       value="{{ old('phone') }}"
                       placeholder="Phone*">
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="date" 
                       name="appointment_date" 
                       class="form-control"
                       value="{{ old('appointment_date') }}">
                @error('appointment_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <select name="program_id" class="form-select form-control">
                    <option value="">Select Service*</option>

                    @foreach($programs as $program)
                        <option value="{{ $program->id }}" 
                            {{ old('program_id') == $program->id ? 'selected' : '' }}>
                            {{ $program->title }}
                        </option>
                    @endforeach

                </select>

                @error('program_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <textarea name="message" 
                          class="form-control" 
                          cols="30" rows="5"
                          placeholder="Your Message">{{ old('message') }}</textarea>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <button type="submit" class="default-btn">
                Submit Now
            </button>
        </div>

    </div>
</form>
                </div>
            </div>
        </div>
        <!-- Appointment Area End -->


        <!-- Gallery Area End -->
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

{{-- Uploaded Video --}}
@if($review->video)

<div class="video-wrapper">

<video controls width="100%">
<source src="{{ asset('storage/'.$review->video) }}" type="video/mp4">
</video>

</div>

{{-- YouTube Video --}}
@elseif($review->youtube_id)

<div class="video-wrapper">

<iframe
src="https://www.youtube.com/embed/{{ $review->youtube_id }}"
title="{{ $review->name }}"
frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen>
</iframe>

</div>

{{-- Instagram Video --}}
@elseif(Str::contains($review->youtube_url,'instagram.com'))

<div class="video-thumb" onclick="openVideo('{{ $review->youtube_url }}')">

<img src="/images/instagram-thumb.jpg" alt="">

<div class="play-btn">▶</div>

</div>

@endif


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


<!-- Video Popup -->
<div id="videoModal" class="video-modal">
<div class="video-modal-content">
<span class="close" onclick="closeVideo()">×</span>
<iframe id="modalVideo" frameborder="0" allowfullscreen></iframe>
</div>
</div>


<style>

.video-wrapper{
position:relative;
width:100%;
padding-top:56.25%;
overflow:hidden;
border-radius:10px;
}

.video-wrapper iframe,
.video-wrapper video{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
border:none;
}

.video-thumb{
position:relative;
cursor:pointer;
}

.video-thumb img{
width:100%;
border-radius:10px;
}

.play-btn{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
font-size:40px;
color:#fff;
background:red;
width:60px;
height:60px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
}

.video-modal{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,.8);
justify-content:center;
align-items:center;
z-index:9999;
}

.video-modal-content{
width:80%;
max-width:800px;
position:relative;
}

.video-modal iframe{
width:100%;
height:450px;
}

.close{
position:absolute;
top:-40px;
right:0;
color:#fff;
font-size:35px;
cursor:pointer;
}

</style>


<script>

function openVideo(url){

let embedUrl = url.replace(/\/$/, "") + "/embed";

document.getElementById('videoModal').style.display='flex';
document.getElementById('modalVideo').src=embedUrl;

}

function closeVideo(){

document.getElementById('videoModal').style.display='none';
document.getElementById('modalVideo').src='';

}

</script>


        <!-- Gallery Area End -->

        <div class="testimonials-area ptb-100">
    <div class="container">

        <div class="section-title text-center mb-5">
            <span>Testimonials</span>
            <h2>Student Review</h2>
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