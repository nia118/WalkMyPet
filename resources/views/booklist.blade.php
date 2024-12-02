<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booklist - WalkMyPet</title>
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

  @include('components.swallalert')
  
    <!-- Navbar -->
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
              </ul>
          </div>
      </div>
  </nav>

  <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('asset/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Booklist <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Booklist</h1>
          </div>
        </div>
      </div>
    </section>

<!-- Booklist Section -->
<div class="container mt-5">

    @if($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <div class="row">
            @foreach($bookings as $booking)
                <!-- Group staffSchedules by booking_id -->
                @php
                    $schedules = $booking->staffSchedules->groupBy('booking_id');
                @endphp
                
                @foreach($schedules as $bookingId => $staffSchedules)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $booking->service->type ?? 'N/A' }}</h5>
                                <p class="card-text"><strong>Pet:</strong> {{ $booking->pet->name ?? 'N/A' }}</p>
                                <p class="card-text"><strong>Location:</strong> {{ $booking->location }}</p>
                                
                                <!-- Separator after initial details -->
                                <hr>

                                <!-- Loop through staffSchedules for the same booking_id -->
                                @foreach($staffSchedules as $index => $staffSchedule)
                                    <div class="schedule-detail">
                                        <p class="card-text"><strong>Staff Name:</strong> {{ $staffSchedule->staff->name ?? 'N/A' }}</p>
                                        <p class="card-text"><strong>Staff Phone:</strong> {{ $staffSchedule->staff->phone_number ?? 'N/A' }}</p>
                                        <p class="card-text"><strong>Date:</strong> {{ $staffSchedule->schedule->date ?? 'N/A' }}</p>
                                        <p class="card-text"><strong>Start Time:</strong> {{ $staffSchedule->schedule->start_time ?? 'N/A' }}</p>
                                        <p class="card-text"><strong>End Time:</strong> {{ $staffSchedule->schedule->end_time ?? 'N/A' }}</p>
                                        
                                        <!-- Add a separator (horizontal line) if there are multiple schedules -->
                                        @if($index < count($staffSchedules) - 1)
                                            <hr>
                                        @endif
                                    </div>
                                @endforeach

                                <!-- Separator after initial details -->
                                <hr>

                                <!-- Display additional service if is_additional is 1 -->
                                @if($booking->is_additional == 1)
                                    <p class="card-text"><strong>Additional:</strong> Pet feeding</p>
                                @endif

                                <!-- Display total price -->
                                <p class="card-text"><strong>Total Price:</strong> Rp.{{ number_format($booking->total_price, 2) }}</p>
                                
                                <!-- Add margin-top to move the Cancel button further down -->
                                @if($booking->is_accepted == 0)
                                    <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-1">Cancel</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    @endif
</div>



  <!-- Footer -->
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
                        <h3 class="heading"><a href="https://www.kinship.com/dog-lifestyle/10-dog-walking-tips-everyone-should-know">10 Tips You'll Definitely Want to Follow When You Walk Your Dog</a></h3>
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
                    <li {{ Route::is('service') ? 'active' : '' }} ><a href="{{ route('service') }}" class="py-1 d-block">Services</a></li>
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
                        <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62 123 456 789</span></a></li>
                        <div style="height: 12px;"></div>
                        <li><a href="#"><span class="icon fa fa-envelope"></span><span class="text">contact@walkmypet.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

<!-- jQuery Plugins -->
<script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('asset/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('asset/js/scrollax.min.js') }}"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('asset/js/google-map.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('asset/js/main.js') }}"></script>

  </body>
</html>
