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
                            <h3>Daily Exercise</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a href="about.html" class="learn-btn">Learn More</a>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a href="about.html" class="learn-btn">Learn More</a>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                            <a href="about.html" class="learn-btn">Learn More</a>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="about-content-item">
                                        <i class="flaticon-exercise"></i>
                                        <h3>Personalized Exercises Plan</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg2">
                            <div class="content">
                                <i class="flaticon-calendar-1"></i>
                                <h3>Appointment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg3">
                            <div class="content">
                                <i class="flaticon-research"></i>
                                <h3>Analysis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="work-card work-bg4">
                            <div class="content">
                                <i class="flaticon-happiness"></i>
                                <h3>Happy Life</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt </p>
                            </div>
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
      <div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($videoReviews as $review)
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card active">
                        
                        <div class="team-img">

                            <div class="video-wrapper">
                                <iframe 
                                    src="https://www.youtube.com/embed/{{ $review->youtube_id }}"
                                    title="{{ $review->name }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

<style>
    .video-wrapper {
    position: relative;
    width: 100%;
    padding-top: 100%; /* Square ratio for team card */
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

        
        <!-- Gallery Area End -->

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