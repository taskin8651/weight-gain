
@extends('custom.master')

@section('content')


<!-- Contact Area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">

            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>

                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Phone Number</h3>
                                <a href="tel:{{ $setting->phone ?? '' }}">
                                    {{ $setting->phone ?? 'N/A' }}
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Address</h3>
                                <span>{{ $setting->address ?? 'N/A' }}</span>
                            </div>
                        </li>

                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Email</h3>
                                <a href="mailto:{{ $setting->email ?? '' }}">
                                    {{ $setting->email ?? 'N/A' }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form">
                    <h3>Contact With Us!</h3>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name"
                                           class="form-control"
                                           placeholder="Name*"
                                           value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email"
                                           class="form-control"
                                           placeholder="Email*"
                                           value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="phone"
                                           class="form-control"
                                           placeholder="Phone Number*"
                                           value="{{ old('phone') }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message"
                                              class="form-control"
                                              rows="5"
                                              placeholder="Your Message*">{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact Area End -->


<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps?q={{ urlencode($setting->address ?? '') }}&output=embed"></iframe>
    </div>
</div>
<!-- Map Area End -->

@endsection
