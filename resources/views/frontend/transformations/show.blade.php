@extends('custom.master')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg8">
    <div class="container">
        <div class="inner-title text-center">
            <h3>{{ $transformation->name }}</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Transformation Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->


<section class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <!-- Before / After Images -->
            <div class="col-lg-6 mb-4">
                <div class="row">

                    <div class="col-6">
                        <h6 class="mb-2 text-muted">Before</h6>
                        <img src="{{ !empty($transformation->before_image)
                            ? asset('storage/'.$transformation->before_image)
                            : 'https://via.placeholder.com/500x500' }}"
                             class="img-fluid rounded shadow-sm">
                    </div>

                    <div class="col-6">
                        <h6 class="mb-2 text-muted">After</h6>
                        <img src="{{ !empty($transformation->after_image)
                            ? asset('storage/'.$transformation->after_image)
                            : 'https://via.placeholder.com/500x500' }}"
                             class="img-fluid rounded shadow-sm">
                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6">

                <div class="service-details-content">

                    <h2 class="mb-3">
                        {{ $transformation->name }}
                    </h2>

                    <!-- Goal Badge -->
                    <span class="badge 
                        {{ $transformation->goal=='weight_loss'
                            ? 'bg-success'
                            : 'bg-primary' }}">
                        {{ ucfirst(str_replace('_',' ',$transformation->goal)) }}
                    </span>

                    <p class="mt-4">
                        {{ $transformation->description }}
                    </p>

                    <a href="{{ route('appointment.page') }}"
                       class="default-btn mt-4 text-white">
                        Start Your Journey
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection