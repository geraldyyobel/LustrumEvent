<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jthemes.net/themes/html/genius-course/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 19:24:48 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Home Page </title>

	<link rel="stylesheet" href="assets/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assetsassets//css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/assets/css/video.min.css">
	<link rel="stylesheet" href="assets/assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/assets/css/progess.css">
	<link rel="stylesheet" href="assets/assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/assets/css/style.css">
	<link rel="stylesheet" href="assets/assets/css/responsive.css">
	
	<link rel="stylesheet"  href="assets/css/colors/switch.css">
	<link href="assets/assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="assets/assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="assets/assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="assets/assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="assets/assets/css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="assets/assets/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="assets/assets/css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="assets/assets/css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">


</head>

<body>
	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase" href="{{ route('welcome2') }}" style="color: aliceblue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><img src="assets/assets/img/logo/684-SMA_KOLESE_DE_BRITTO_YOGYAKARTA.png" width="51" height="43">SMA KOLESE DE BRITTO</a>
							</div><!-- /.navbar-header -->

							<!-- Sign Up -->
							<div class="log-in float-right">
								<a  href="{{ route('register') }}">Sign Up</a>
							</div>
							
							<!-- Sign In -->
							<div class="log-in float-right">
								<a  data-toggle="modal" data-target="#myModal" href="#">Sign In</a>
								<!-- The Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="assets/assets/img/logo/684-SMA_KOLESE_DE_BRITTO_YOGYAKARTA.png" width="71" height="63" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> Your Account.</h2>
													<p>Login to our website, or <span>REGISTER</span></p>
												</div>
											</div>

											<!-- Modal body -->
                                            <x-auth-session-status class="mb-4" :status="session('status')" />

                                            <!-- Validation Errors -->
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
											<div class="modal-body">
												<form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ route('login') }}">
                                                    @csrf
													<div class="contact-info">
														<input class="name" name="email" type="email" placeholder="Your@email.com*" id="email" :value="old('email')" required autofocus>
													</div>

                                                    @if (Route::has('password.request'))
                                                        <div class="float-right">
                                                            <a href="{{ route('password.request') }}" class="text-small">
                                                                {{ __('Forgot your password?') }}
                                                            </a>
                                                        </div>
                                                    @endif

													<div class="contact-info">
														<input class="pass"  type="password" placeholder="Your password*" id="password"  name="password" required autocomplete="current-password">
													</div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                                                            <label class="custom-control-label" for="remember_me">{{ __('Remember Me') }}</label>
                                                        </div>
                                                    </div>
                        
													<div class="nws-button text-center white text-capitalize">
														<a href="{{ route('register') }}" class="text-small">Register</a>
														<button type="submit" value="Submit">{{ __('Log in') }}</button> 
													</div> 
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>

							
							<!-- Collect the nav links, forms, and other content for toggling -->
							{{-- <nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="index-1.html">Home</a>
										</li>
										<li><a href="about.html">About Us</a></li>
										<!-- <li><a href="shop.html">shop</a></li> -->
										<li><a href="contact.html">Contact Us</a></li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#!">Pages</a>
											<ul class="sub-menu">
												<li><a href="teacher.html">Teacher</a></li>
												<li><a href="teacher-details.html">Teacher Details</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-single.html">Blog Single</a></li>
												<li><a href="course.html">Course</a></li>
												<li><a href="course-details.html">Course Details</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="check-out.html">Check Out</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav> --}}

							{{-- <div class="mobile-menu">
								<div class="logo"><a href="index-1.html"><img src="assets/img/logo/logo.png" alt="Logo"></a></div>
								<nav>
									<ul>
										<li><a href="index-1.html">Home</a>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="blog.html">Blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-single.html">Blog sinlge</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Shop</a>
										</li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="#">Pages</a>
											<ul>
												<li><a href="course.html">Course</a></li>
												<li><a href="course-details.html">course sinlge</a></li>
												<li><a href="teacher.html">teacher</a></li>
												<li><a href="teacher-details.html">teacher details</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="check-out.html">Check Out</a></li>
											</ul>
										</li>
									</ul>
								</nav>

							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</header>
<!-- Start of Header section
	============================================= -->


	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">OUR COMPETITION</span>
							</div>
							<div class="layer-1-3">
								<h2><span>JB</span> CUP</h2>
							</div>
						</div>
						{{-- <div class="layer-1-4">
							<div id="course-btn">
								<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
									<a href="#">Regist Now <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div> --}}
					</div>

				</div>
				<div class="slider-area slider-bg-2 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">OTHER ACTIVITY</span>
							</div>
							<div class="layer-1-2">
								<h2 class="secoud-title"> SEMINAR PENDIDIKAN <br><span>NASIONAL</span></h2>
							</div>
						</div>
						<div class="layer-1-3">
							<div class="search-course mb30 relative-position">
							</div>
						</div>
					</div>
				</div>
				<div class="slider-area slider-bg-3 relative-position">
					<div class="slider-text">
						<div class="layer-1-2">
							</div>
						<div class="section-title mb20 headline text-center ">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">OTHER ACTIVITY</span>
							</div>
							<div class="layer-1-3">
								<h2 class="third-slide"> VIRTUAL <span>SPORT</span></h2>
							</div>
						</div>
						{{-- <div class="layer-1-4">
							<div class="about-btn text-center">
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">About Us <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">contact us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
				<div class="slider-area slider-bg-4 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center ">
							<span class="subtitle text-uppercase">CLOSING CEREMONY</span>
							<h2 class="third-slide"  ><span>MALAM</span> PUNCAK </h2>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of slider section
		============================================= -->


	<!-- Start of footer section
		============================================= -->
		<footer>
			<section id="footer-area" class="">
				<div class="container">
					
					<!-- /footer-widget-content -->
					{{-- <div class="footer-social-subscribe mb65">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-social ul-li "  >
									<h2 class="widget-title">Social Network</h2>
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-9">
								<div class="subscribe-form "  >
									<h2 class="widget-title">Subscribe Newsletter</h2>

									<div class="subs-form relative-position">
										<form action="#" method="post">
											<input class="course" name="course" type="email" placeholder="Email Address.">
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Subscribe now</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

					<div class="copy-right-menu">
						<div class="row">
							<div class="col-md-6">
								<div class="copy-right-text">
									<p>© 2023 - Pandu & Aldy by <a href="https://www.usd.ac.id/" title="Best Premium WordPress, HTML Template Store"> Sanata Dharma</a>. All rights reserved</p>
								</div>
							</div>
							<!-- <div class="col-md-6">
								<div class="copy-right-menu-item float-right ul-li">
									<ul>
										<li><a href="#">License</a></li>
										<li><a href="#">Privacy & Policy</a></li>
										<li><a href="#">Term Of Service</a></li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>
		</footer>
	<!-- End of footer section
		============================================= -->



		<!-- For Js Library -->
		<script src="assets/assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/assets/js/bootstrap.min.js"></script>
		<script src="assets/assets/js/popper.min.js"></script>
		<script src="assets/assets/js/owl.carousel.min.js"></script>
		<script src="assets/assets/js/jarallax.js"></script>
		<script src="assets/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/assets/js/lightbox.js"></script>
		<script src="assets/assets/js/jquery.meanmenu.js"></script>
		<script src="assets/assets/js/scrollreveal.min.js"></script>
		<script src="assets/assets/js/jquery.counterup.min.js"></script>
		<script src="assets/assets/js/waypoints.min.js"></script>
		<script src="assets/assets/js/jquery-ui.js"></script>
		<script src="assets/assets/js/gmap3.min.js"></script>
		<script src="assets/assets/js/switch.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
		<script src="assets/assets/js/script.js"></script>

	</body>
	
<!-- Mirrored from jthemes.net/themes/html/genius-course/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 19:25:11 GMT -->
</html>