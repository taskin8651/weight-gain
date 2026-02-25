@php 
$settings = App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=== Link Of CSS Files ===-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
       
        <!--=== Title & Favicon ===-->
        <title>Arrola - Nutrition & Healthy Diet Recipe HTML Template</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
        
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container">
                <div class="top-inner-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4">
                            <div class="header-left">
                                <p>Welcome To {{ $settings->site_name ?? config('app.name') }}</p>
                            </div>
                        </div>
    
                        <div class="col-lg-9 col-md-8">
                            <div class="header-right d-flex align-items-center">
                                <div class="header-item">
                                    <ul>
                                        <li class="title">Follow us :</li>
                                        <li>
                                            <a href="{{ $settings->facebook ?? '#' }}" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->instagram ?? '#' }}" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->twitter ?? '#' }}" target="_blank">
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->youtube ?? '#' }}" target="_blank">
                                                <i class='bx bxl-youtube'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                                
    
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container">
                    <div class="mobile-responsive-menu">
                         <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('storage/'.$settings->logo) }}" class="logo-one" alt="Logo">
                                <img src="{{ asset('storage/'.$settings->logo) }}" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav nav-area">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('storage/'.$settings->logo) }}" class="logo-one" alt="Logo">
                            <img src="{{ asset('storage/'.$settings->logo) }}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                        Home 
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('about.page') }}" class="nav-link {{ request()->routeIs('about.page') ? 'active' : '' }}">
                                        About Us
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('programs.page') }}" class="nav-link {{ request()->routeIs('programs.page') ? 'active' : '' }}">
                                        Courses
                                    </a>
                                  
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('video-reviews.page') }}" class="nav-link {{ request()->routeIs('video-reviews.page') ? 'active' : '' }}">
                                        Customer Reviews
                                    </a>
                                
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('transformations.page') }}" class="nav-link {{ request()->routeIs('transformations.page') ? 'active' : '' }}">
                                        Transformation
                                    </a>
                                
                                </li>

                                
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact.page') }}" class="nav-link {{ request()->routeIs('contact.page') ? 'active' : '' }}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                               

                                <div class="optional-item">
                                    <a href="{{ route('appointment.page') }}" class="default-btn two">Book An Appointment</a>
                                </div>
                            </div> 

                            <div class="mobile-nav">
                                <div class="mobile-other d-flex align-items-center">
                                    
    
                                    <div class="optional-item">
                                        <a href="{{ route('appointment.page') }}" class="default-btn two">Appointment</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->


        @yield('content')

           <!-- Footer Area -->
        <footer class="footer-area footer-area-bg">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('storage/'.$settings->logo) }}" alt="Images">
                                    </a>
                                </div>
                                <p>
                                    {{ $settings->footer_text ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' }}
                                </p>
                                <ul class="social-link">
                                    <li>
                                        <a href="{{ $settings->facebook ?? '#' }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                 
                                   
                                    <li>
                                        <a href="{{ $settings->instagram ?? '#' }}" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                        <li>
                                            <a href="{{ $settings->twitter ?? '#' }}" target="_blank">
                                                <i class='bx bxl-twitter' ></i>
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="{{ $settings->youtube ?? '#' }}" target="_blank">
                                                <i class='bx bxl-youtube'></i>
                                            </a>
                                        </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Useful Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="{{ route('home') }}" target="">
                                            Home
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('about.page') }}" target="">
                                            About Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('programs.page') }}" target="">
                                            Courses
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('video-reviews.page') }}" target="">
                                            Customer Reviews    
                                        </a>
                                    </li> 

                                        <li>
                                            <a href="{{ route('transformations.page') }}" target="">
                                                Transformation    
                                            </a>
                                        </li>
                                    <li>
                                        <a href="{{ route('contact.page') }}" target="">
                                            Contact Us     
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="footer-widget ps-5">
                                <div class="row">
                                    <div class="col-lg-7">
                                <h3>Information</h3>
                                <ul class="footer-contact">
                                    <li class="mb-0 pb-0">
                                            Phone: <br>
                                            <a href="tel:{{ $settings->phone ?? '+8245678924' }} " class="text-white">{{ $settings->phone ?? '+8245678924' }}</a><br>
                                    </li> 
                                    <li class="mb-0 pb-0">
                                        Email:  <br>
                                            <a href="mailto:{{ $settings->email ?? '[email protected]' }}" class="text-white">{{ $settings->email ?? '[email protected]' }}</a><br>
                                    </li> 
                                     <li class="mb-0 pb-0">
                                        Address: <br>

                                           <a href="" class="text-white"> {{ $settings->address ?? '5ut, Stamford South, New Zeland' }}</a>
                                    </li> 
                                </ul>
                                </div>

                                <div class="col-lg-6">
                                    <h3>Our Location</h3>
                            <iframe src="https://www.google.com/maps?q={{ urlencode($settings->address ?? '') }}&output=embed"></iframe>
                        </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script>  Arrola. All Rights Reserved by 
                            <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Modal Start -->
        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-search-form">
                            <input type="search" class="search-field" placeholder="Search...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- WhatsApp Floating Button -->
<a href="https://wa.me/{{ $settings->whatsapp ?? 'XXXXXXXXXX' }}?text=Hello%20I%20want%20more%20information"
   class="whatsapp-float"
   target="_blank">
    <i class="bx bxl-whatsapp"></i>
</a>
<style>
    .whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 25px;
    right: 25px;
    background-color: #72ae44;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.whatsapp-float:hover {
    background-color: #72ae44;
    transform: scale(1.1);
}
</style>
        
        <!--=== Link Of JS Files ===-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>

</html>