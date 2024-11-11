<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap') }}" rel="stylesheet">

    <link href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">


    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <style>
    /* Container untuk form dan gambar tanpa jarak */
    .contact-container {
        display: flex;
        align-items: stretch;
        gap: 0;
        justify-content: center;
    }
    .contact-form {
        flex: 1;
        max-width: 600px;
        margin: 0;
    }
    .contact-wrap {
        padding: 40px;
        background-color: #fff;
        border-radius: 8px 0 0 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .contact-wrap h2 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #333;
    }
    .contact-wrap p {
        font-size: 16px;
        color: #666;
        margin-bottom: 30px;
    }
    .form-group label {
        font-weight: 600;
        color: #333;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        border-radius: 4px;
    }
    .btn-primary:hover {
        background-color: #218838;
    }
    .select-wrap {
        margin-bottom: 10px;
    }
    /* CSS untuk ikon rating */
    .star-rating {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 24px;
    }
    .star-rating .fa {
        color: #FFD700;
        cursor: pointer;
    }
    /* Style untuk gambar */
    .contact-image {
    flex: 1;
    background-image: url('{{ asset('asset/images/img.jpg') }}');
    background-size: cover;
    background-position: center;
    border-radius: 0 8px 8px 0;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Tambahkan shadow di sini */
    }
    </style>

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
						<li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
						<li class="nav-item"><a href="{{ route('service') }}" class="nav-link">Service</a></li>
						<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- END nav -->

    <!-- Pesan Sukses -->
    @if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('asset/images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contact</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    <div class="container">
        <div class="contact-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="wrapper">
                <div class="row mb-5">
                <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text">
                        <p><span>Address:</span> Surabaya, Indonesia</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">+62 1234 567</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">walkmypet@gmail.com</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                    </div>
                    <div class="text">
                        <p><span>Website</span> <a href="#">walkmypet.com</a></p>
                    </div>
                    </div>
                </div>
                </div>

                <div class="row no-gutters">
                <!-- Contact Form (Left Side) -->
                <div class="col-md-7">
                    <div class="contact-wrap w-100 p-md-5 p-4" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <h2 class="mb-4 text-center">Contact Us</h2>
                    <p class="text-center">Have questions, need assistance, or want to share feedback? Contact us at WalkMyPet to learn more about our services, book your next pet care session, or let us know how we can improve!</p>

                    <form action="{{ route('contact.store') }}" method="POST" class="appointment">
                        @csrf
                        <div class="form-group">
                            <label for="service">Select Services</label>
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select name="service" id="service" class="form-control">
                                    <option value="">Choose a service</option>
                                    <option value="pet_sitting">Pet Sitting</option>
                                    <option value="pet_walking">Pet Walking</option>
                                    <option value="pet_training">Pet Training</option>
                                    <option value="pet_grooming">Pet Grooming</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your message here..."></textarea>
                        </div>

                        <!-- Rating Section -->
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <div id="rating" class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" name="rating" class="rating-value" value="0">
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </form>

                    </div>
                </div>

                <!-- Contact Image (Right Side) -->
                <div class="col-md-5">
                    <div class="contact-image" style="background-image: url('{{ asset('asset/images/img.jpg') }}'); background-size: cover; background-position: center; border-radius: 0 8px 8px 0; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); height: 100%;"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>





		<!-- <div id="map" class="map"></div> -->

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
                        <h3 class="heading"><a href="#">Top Tips for Walking Your Dog Like a Pro</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> October 26, 2024</a></div>
                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block">Home</a></li>
                    <li><a href="#" class="py-1 d-block">About</a></li>
                    <li><a href="#" class="py-1 d-block">Services</a></li>
                    <li><a href="#" class="py-1 d-block">Contact</a></li>
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

  <script>
        // JavaScript to update the hidden rating input when a star is clicked
        document.querySelectorAll('.star-rating .fa').forEach(function(star) {
            star.addEventListener('click', function() {
                var rating = this.getAttribute('data-rating');
                document.querySelector('.rating-value').value = rating;

                // Add active class to stars
                document.querySelectorAll('.star-rating .fa').forEach(function(star) {
                    star.classList.remove('fa-star');
                    star.classList.add('fa-star-o');
                });

                // Add active class to selected stars
                for (var i = 0; i < rating; i++) {
                    document.querySelectorAll('.star-rating .fa')[i].classList.remove('fa-star-o');
                    document.querySelectorAll('.star-rating .fa')[i].classList.add('fa-star');
                }
            });
        });
    </script>
    
  </body>
</html>