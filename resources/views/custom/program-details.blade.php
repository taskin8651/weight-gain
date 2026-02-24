@extends('custom.master')
@section('content')
    <!-- Inner Banner -->
        <div class="inner-banner inner-bg7">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ $program->title }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>{{ $program->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Details Area -->
        <div class="service-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">

                 <div class="col-lg-8">
                        <div class="service-details-content">
                            <div class="service-preview-slider owl-carousel owl-theme">
                                <div class="service-preview-item">
                                    <img src="{{ asset('storage/'.$program->image) }}" alt="Blog Images">
                                </div>

                               
                            </div>

                            <h2>{{ $program->title }}</h2>
                            <p>
                                {!! nl2br(e($program->description)) !!}
                            </p>
                           

                         

                           
                            
                        </div>
                    </div>


                    <div class="col-lg-4 ">

                         <div class="side-bar-area pr-20 border p-3">

                    <div class="side-bar-categories mb-5 ">
                        <h4 class="mb-3">Course Info</h4>
                        <ul>
                            <li>
                                Price:
                                <strong>₹{{ $program->price }} Including GST</strong>
                            </li>
                            <li>
                                Duration:
                                <strong>{{ $program->duration }} </strong>
                            </li>
                           
                        </ul>
                    </div>

                    <div class="my-4">
                        <a href="{{ route('appointment.page') }}" class="default-btn w-100">
                            Enroll Now
                        </a>
                    </div>
                    
                           

                            <div class="side-bar-categories">
                                <ul>
                                    @foreach($programs as $prog)
                                        <li>
                                            <a href="{{ route('program.details', $prog->id) }}" target="_blank">
                                                {{ $prog->title }}
                                                <i class='bx bx-right-arrow-alt'></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                          
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- Service Details Area End -->

        @endsection