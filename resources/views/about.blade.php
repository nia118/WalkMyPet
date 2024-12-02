<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WalkMyPet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('asset/images/logo_walkmypet.png') }}" alt="WalkMyPet Logo" style="height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item {{ Route::is('service') ? 'active' : '' }}">
                        <a href="{{ route('service') }}" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>

                    <!-- Dropdown -->
                    @auth
                    <li class="nav-item {{ Route::is('booklist') ? 'active' : '' }}">
                        <a href="{{ route('booklist') }}" class="nav-link">Booklist</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                            </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                    </li>
                    @endauth

                    @guest
                    <!-- Show Login link if not logged in -->
                    <li class="nav-item {{ Route::is('login') ? 'active' : '' }}">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('asset/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-md-5 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{ asset('asset/images/about-1.jpg') }});">
                        </div>
                    </div>
                    <div class="col-md-7 pl-md-5 py-md-5">
                        <div class="heading-section pt-md-5">
                    <h2 class="mb-4">Why Choose Us?</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 services-2 w-100 d-flex">
                                <!-- <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div> -->
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
                                <div class="text pl-3">
                                    <h4>Convenience</h4>
                                    <p>We make everything simple and hassle-free for you. Whether it's scheduling services, managing bookings, or accessing our platform, you can handle it all effortlessly from your device anytime, anywhere.</p>
                                </div>
                            </div>
                            <div class="col-md-6 services-2 w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
                                <div class="text pl-3">
                                    <h4>Safety and Trust</h4>
                                    <p>Your safety and trust are our top priorities. We work only with qualified, background-checked professionals who provide dependable and secure services.</p>
                                </div>
                            </div>
                            <div class="col-md-6 services-2 w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
                                <div class="text pl-3">
                                    <h4>Variety and Flexibility</h4>
                                    <p>We offer a wide range of services tailored to meet your unique needs. From personalized care options to adjustable schedules, you have the flexibility to select what works best for you and your pets.</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 services-2 w-100 d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
                                <div class="text pl-3">
                                    <h4>Veterinary Help</h4>
                                    <p>Far far away, behind the word mountains, far from the countries.</p>
                                </div>
                            </div> -->
                        </div>
                </div>
            </div>
            </div>
        </section>


        <footer class="footer" style="padding-top: 40px; padding-bottom: 25px;">
            <div class="container">
                <div class="row">
                    <!-- WalkMyPet Section -->
                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <h2 class="footer-heading">WalkMyPet</h2>
                        <p>We connect pet owners with trusted walkers, trainers, groomers, and sitters to ensure the health and happiness of your beloved pets.</p>
                        <ul class="ftco-footer-social p-0" style="margin-top: 20px;">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>

                    <!-- Latest News Section -->
                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <h2 class="footer-heading">Latest News</h2>
                        <div class="block-21 mb-2 d-flex">
                            <a class="img mr-3 rounded" style="background-image: url('{{ asset('asset/images/image_1.jpg') }}'); width: 60px; height: 60px;"></a>
                            <div class="text">
                                <h3 class="heading"><a href="https://www.kinship.com/dog-lifestyle/10-dog-walking-tips-everyone-should-know">10 Tips Yout&#39;ll Definitely Want to Follow When You Walk Your Dog</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> August 1, 2024</a></div>
                                    <div><a href="#"><span class="icon-person"></span>Kinship</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links Section -->
                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <h2 class="footer-heading">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li {{ Route::is('home') ? 'active' : '' }} ><a href="{{ route('home') }}" class="py-1 d-block">Home</a></li>
                            <li {{ Route::is('about') ? 'active' : '' }} ><a href="{{ route('about') }}" class="py-1 d-block">About</a></li>
                            <li {{ Route::is('sevice') ? 'active' : '' }} ><a href="{{ route('service') }}" class="py-1 d-block">Services</a></li>
                            <li {{ Route::is('contact') ? 'active' : '' }} ><a href="{{ route('contact') }}" class="py-1 d-block">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Have a Questions Section -->
                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                        <h2 class="footer-heading">Have a Questions?</h2>
                        <div class="block-23 mb-2">
                            <ul>
                                <li><span class="icon fa fa-map"></span><span class="text">Surabaya, Indonesia</span></li>
                                <div style="height: 12px;"></div>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62 1234 567</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">walkmypet@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom Row -->
                <div class="row mt-3">
                    <div class="col-md-12 text-center">
                        <p class="copyright" style="margin-top: 20px;">
                            &copy; <script>document.write(new Date().getFullYear());</script> WalkMyPet | All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('asset/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('asset/js/google-map.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>