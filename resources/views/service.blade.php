<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WalkMyPet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 

    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
 
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>

    <!-- <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +62 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> walkmypet@gmail.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div> -->

    @include('components.swallalert')

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
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('asset/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>



  <section class="ftco-section bg-light">
    <div class="container">

    <!-- Row 1 -->
    <div class="row mb-5 pb-5">
      <div class="col-12 col-md-6 d-flex align-self-stretch px-4 mb-5 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-dog-eating"></span>
          </div>
          <div class="media-body p-4">
            <h3 class="heading">Pet Sitting</h3>
            <p>Provides companionship and care for pets in their home environment, reducing stress, maintaining routines.</p>
            <a href="/book/1" class="btn-custom d-flex align-items-center justify-content-center">
              <span class="fa fa-chevron-right"></span>
              <i class="sr-only">Read more</i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 d-flex align-self-stretch px-4 mb-5 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-blind"></span>
          </div>
          <div class="media-body p-4">
            <h3 class="heading">Pet Walking</h3>
            <p>Provides pets with essential exercise and socialization, which is crucial for their physical and mental well-being.</p>
            <a href="/book/3" class="btn-custom d-flex align-items-center justify-content-center">
              <span class="fa fa-chevron-right"></span>
              <i class="sr-only">Read more</i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="row mt-5 pt-4">
      <div class="col-12 col-md-6 d-flex align-self-stretch px-4 mb-5 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-dog-eating"></span>
          </div>
          <div class="media-body p-4">
            <h3 class="heading">Pet Training</h3>
            <p>Helps improve pets behavior and obedience, making them easier to manage.</p>
            <a href="/book/4" class="btn-custom d-flex align-items-center justify-content-center">
              <span class="fa fa-chevron-right"></span>
              <i class="sr-only">Read more</i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 d-flex align-self-stretch px-4 mb-5 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-grooming"></span>
          </div>
          <div class="media-body p-4">
            <h3 class="heading">Pet Grooming</h3>
            <p>Keeps pets clean and healthy, enhancing their appearance and comfort while also helping to identify potential health issues early.</p>
            <a href="/book/2" class="btn-custom d-flex align-items-center justify-content-center">
              <span class="fa fa-chevron-right"></span>
              <i class="sr-only">Read more</i>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

<section class="ftco-section bg-light">
  <div class="container px-5">
    <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Affordable Packages</h2>
        </div>
    </div>
    
      <div class="row justify-content-center">        
          <!-- Comfort Care -->
          <div class="col-md-4 ftco-animate d-flex align-items-stretch">
              <div class="block-7 d-flex flex-column w-100" style="min-height: 450px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                  <div class="text-center p-4 flex-grow-1">
                      <span class="excerpt d-block">Comfort Care</span>
                      <span class="price"><sup>Rp.</sup> <span class="number">90K</span></span>
                      <ul class="pricing-text mb-5">
                          <li><span class="fa fa-check mr-2"></span>Sitting</li>
                          <li><span class="fa fa-check mr-2"></span>Walking</li>
                      </ul>
                  </div>
                  <div class="mt-auto p-3 text-center">
                      <a href="#" class="btn btn-primary d-block px-2 py-3">Book</a>
                  </div>
              </div>
          </div>

          <!-- Groom & Walk -->
          <div class="col-md-4 ftco-animate d-flex align-items-stretch">
              <div class="block-7 d-flex flex-column w-100" style="min-height: 450px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                  <div class="text-center p-4 flex-grow-1">
                      <span class="excerpt d-block">Groom & Walk</span>
                      <span class="price"><sup>Rp.</sup> <span class="number">90K</span></span>
                      <ul class="pricing-text mb-5">
                          <li><span class="fa fa-check mr-2"></span>Grooming</li>
                          <li><span class="fa fa-check mr-2"></span>Walking</li>
                      </ul>
                  </div>
                  <div class="mt-auto p-3 text-center">
                      <a href="#" class="btn btn-primary d-block px-2 py-3">Book</a>
                  </div>
              </div>
          </div>

          <!-- Premium Care & Train -->
          <div class="col-md-4 ftco-animate d-flex align-items-stretch">
              <div class="block-7 d-flex flex-column w-100" style="min-height: 450px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                  <div class="text-center p-4 flex-grow-1">
                      <span class="excerpt d-block">Premium Care & Train</span>
                      <span class="price"><sup>Rp.</sup> <span class="number">140K</span></span>
                      <ul class="pricing-text mb-5">
                          <li><span class="fa fa-check mr-2"></span>Sitting</li>
                          <li><span class="fa fa-check mr-2"></span>Training</li>
                          <li><span class="fa fa-check mr-2"></span>Walking</li>
                      </ul>
                  </div>
                  <div class="mt-auto p-3 text-center">
                      <a href="#" class="btn btn-primary d-block px-2 py-3">Book</a>
                  </div>
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

    
  

  <!-- loader -->
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
