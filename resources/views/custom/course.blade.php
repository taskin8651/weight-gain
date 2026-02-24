@extends('custom.master')

@section('content')
  <!-- Inner Banner -->
        <div class="inner-banner inner-bg8">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Courses</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services Area -->
       <div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Our Courses</span>
            <h2>Professional Diet & Nutrition Programs</h2>
        </div>

        <div class="row pt-45 justify-content-center">

            @forelse($programs as $program)
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">

                        <a href="{{ route('program.details', $program->id) }}">
                            <img src="{{ asset('storage/'.$program->image) }}" 
                                 alt="{{ $program->title }}">
                        </a>

                        <div class="content">
                            <h3>
                                <a href="{{ route('program.details', $program->id) }}">
                                    {{ $program->title }}
                                </a>
                            </h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit($program->description, 120) }}
                            </p>

                            <div class="mb-2">
                                <strong>₹{{ $program->price }}</strong> |
                                <span>{{ $program->duration }}</span>
                            </div>

                            <a href="{{ route('program.details', $program->id) }}" 
                               class="learn-btn">
                                View Course
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center">
                    <p>No Courses Available</p>
                </div>
            @endforelse


            <!-- Pagination -->
            <div class="col-lg-12 text-center mt-4">
                {{ $programs->links() }}
            </div>

        </div>
    </div>
</div>
        <!-- Services Area End -->

        @endsection