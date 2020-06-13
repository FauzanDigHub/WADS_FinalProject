@extends('layout/main')
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>

@section('container')
<!-- About Section end -->
<section class="about-section">
	<div class="about-warp">
		<div class="about-left">
			<div class="about-img">
				<img src="img/LogoHome.png" style="object-fit:contain; width:40%" alt="">
			</div>
			<div class="profile-text text-white">
				<h2>Hello!</h2>
				<h2>I’m <strong>{{Session::get('name')}}</strong></h2>
				<p>I can store all your past knowledge in a form of image. I will safeguard it with watermark so others can't plagiarize your past achievements. I do not follow certain styles in teaching students, philosophers and teachers.</p>
				<?php
            	if(Session::get('name')== ""){
                ?>
				<a href="{{ url('/login') }}" class="profile-btn">Wake Me: Login</a>
				<?php
            	}
            	else{
            	?>
                <li class="logout-btn"><a href="{{ url('/logout') }}"  class="profile-btn">Log Out</a></li>
                <?php
                }
        		?>
				<div class="popup profile-email" onclick="myFunction()">Click Me: user@pastnote.com
					<span class="popuptext" id="myPopup">Use this Email to login as a User</span>
				</div>
			</div>
		</div>
		<div class="about-right">
			<div class="about-text">
				<h2>About Me</h2>
				<p>“Helpful information sometimes are not accessible.” </p>
				<p>Thats why, our creators felt the urge to create a platform where Binus students could find free resources. </p>
				<p>Which can be a guide for an assignment, notes from senior’s that can maybe help you to understand the courses better. This can also be of helped if you want to review a course for work purposes, after you graduate.</p>
				<p>From Computer Science all the way to Communication Majors in Binus International University, Made for and by Binusian Students.</p>
				<p>Otherwise your past knowledge would be wasted if you just kept it in your device.</p>
				<h4>-Fauzan Athallah Arief</h4><p>Founder of Pastnote, Binusian 2022</p> 
				<!-- #2916e0 -->
				<h2 class="pt-5">My Advantages</h2>
			</div>
			<div class="skill-warp text-center">
				<div class="container">
					<div class="row">
						<div class="col">
							<h4>Existing Web Application</h4><br>
							<p>- Some content have to be bought with subscription plan or licenses before it can be accessed</p>
							<p>- Only for designers (arts)</p>
						</div>
						<div class="col">
							<h4>PASTNOTE</h4><br>
							<p>- Free access to all content</p>
							<p>- Can be in any form (for all majors)</p>
							<p>- All sources in One Web</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

<!-- About Section end -->
@endsection