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
                                            <a href="{{ $settings->facebook_url ?? '#' }}" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->instagram_url ?? '#' }}" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->twitter_url ?? '#' }}" target="_blank">
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $settings->youtube_url ?? '#' }}" target="_blank">
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
                                <img src="{{ asset('storage/'.$settings->logo_white) }}" class="logo-two" alt="Logo">
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
                                    <a href="{{ route('home') }}" class="nav-link active">
                                        Home 
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('about.page') }}" class="nav-link">
                                        About Us
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('programs.page') }}" class="nav-link">
                                        Courses
                                    </a>
                                  
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('video-reviews.page') }}" class="nav-link">
                                        Customer Reviews
                                    </a>
                                
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                     -->
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact.page') }}" class="nav-link">
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
                                    {{ $settings->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' }}
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
                                        <a href="{{ route('home') }}" target="_blank">
                                            Home
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('about.page') }}" target="_blank">
                                            About Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('programs.page') }}" target="_blank">
                                            Courses
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('video-reviews.page') }}" target="_blank">
                                            Customer Reviews    
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('contact.page') }}" target="_blank">
                                            Contact Us     
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget ps-5">
                                <h3>Information</h3>
                                <ul class="footer-contact">
                                    <li>
                                        Phone:
                                        <span>
                                            <a href="tel:{{ $settings->phone ?? '+8245678924' }}">{{ $settings->phone ?? '+8245678924' }}</a><br>
                                            <a href="tel:{{ $settings->phone2 ?? '+8245668964' }}">{{ $settings->phone ?? '+8245668964' }}</a>
                                        </span>
                                    </li> 
                                    <li>
                                        Email:
                                        <span>
                                            <a href="mailto:{{ $settings->email ?? '[email protected]' }}">{{ $settings->email ?? '[email protected]' }}</a><br>
                                            <a href="mailto:{{ $settings->email2 ?? '[email protected]' }}">{{ $settings->email ?? '[email protected]' }}</a>
                                        </span>
                                    </li> 
                                     <li>
                                        Address:
                                        <span>
                                            {{ $settings->address ?? '5ut, Stamford South, New Zeland' }}
                                        </span>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                           
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