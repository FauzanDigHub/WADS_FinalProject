@extends('layout/main')

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
				<a href="#" class="profile-btn">Say Hello</a>
				<a href="#" class="profile-email">colorlib@gmail.com</a>
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
				<h4>-Fauzan Athallah Arief</h4><p>Founder of Pastnote, Binusian 2022 #2916e0</p>
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
<!-- About Section end -->
@endsection