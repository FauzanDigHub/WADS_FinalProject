<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('img/LogoHome.png')}}">
	<title>P A S T N O T E</title>
	<meta charset="UTF-8">
	<meta name="description" content="P A S T N O T E HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/accordion.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="menu-wrapper">
		<div class="menu-switch">
			<i class="ti-menu"></i>
		</div>
        
        <div class="menu-social-warp">
            <div class="menu-social">

				
                
                <a href="{{ url('/') }}" class="ti-logo"><img src="{{ asset('img/LogoHome.png') }}"></a>
                        
                <a href="https://www.facebook.com/universitasbinanusantara/" style="text-align:center;"><i class="ti-facebook container"></i></a>
                <a href="https://twitter.com/binus_univ?lang=en" style="text-align:center;"><i class="ti-twitter-alt container"></i></a>
                <a href="https://www.linkedin.com/school/universitas-bina-nusantara-binus/" style="text-align:center;"><i class="ti-linkedin container"></i></a>
                <a href="https://www.instagram.com/binusinter/?hl=en" style="text-align:center;"><i class="ti-instagram container"></i></a>
            </div>
		</div>
	</div>
	<div class="side-menu-wrapper">
		<div class="sm-header">
			<div class="menu-close">
				<i class="ti-arrow-left"></i>
			</div>
            <a href="{{ url('/') }}" class="site-logo">
                <img src="{{ asset('img/FinalLogo.png') }}" alt="">
            </a>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="{{ url('/') }}" class="active">Home</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
				<li><a href="{{ url('/gallery') }}">Gallery</a></li>
				<li><a href="{{ url('/blog') }}">Blog</a></li>
				<li><a href="{{ url('/contact') }}">Contact</a></li>
			</ul>
		</nav>
		<div class="sm-footer">
			<div class="sm-socail">
				<a href="https://www.facebook.com/universitasbinanusantara/"><i class="ti-facebook"></i></a>
				<a href="https://twitter.com/binus_univ?lang=en"><i class="ti-twitter-alt"></i></a>
				<a href="https://www.linkedin.com/school/universitas-bina-nusantara-binus/"><i class="ti-linkedin"></i></a>
				<a href="https://www.instagram.com/binusinter/?hl=en"><i class="ti-instagram"></i></a>
			</div>
			<div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->

	@yield('container')

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/pana-accordion.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
