@extends('custom.master')
@section('content')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Appointment</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

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
        <!-- Appointment Area End -->

        @endsection