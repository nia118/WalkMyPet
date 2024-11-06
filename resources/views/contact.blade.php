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
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-0">
						<!-- <h2 class="heading-section">Contact</h2> -->
					</div>
				</div>
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
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">


                                    <h2 class="mb-4">Contact Us</h2>
                                        <p class="text-black">Have questions, need assistance, or want to share feedback? Contact us at WalkMyPet to learn more about our services, book your next pet care session, or let us know how we can improve!</p>
                                            <form action="#" class="appointment">
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                        <select name="" id="" class="form-control">
                                                            <option value="">Select services</option>
                                                            <option value="">Pet Sitting</option>
                                                            <option value="">Pet Walking</option>
                                                            <option value="">Pet Training</option>
                                                            <option value="">Pet Grooming</option>
                                                            <option value="">Other</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                            <!-- <div class="col-md-12">
                                            <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Vehicle number">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                                    </div>
                                            </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-wrap">
                                                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                                    </div>
                                            </div>
                                            </div> -->
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                                                </div>
                                            </div>
                                            </div>
                                            </form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap w-100 p-5 img" style="background-image: url('{{ asset('asset/images/img.jpg') }}');">
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

    
  </body>
</html>