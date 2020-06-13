@extends('layout/main')



@section('container')
<!-- Hero Section end -->
<section class="hero-section">
	<div class="pana-accordion" id="accordion">
		<div class="pana-accordion-wrap">
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$cs -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$cs -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$cs -> name}}</h4>
					</div>
				</div>
			</div>
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$design -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Design</div>
					<h2>{{$design -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$design -> name}}</h4>
					</div>
				</div>
			</div>
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$ib -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">International Business</div>
					<h2>{{$ib -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$ib -> name}}</h4>
					</div>
				</div>
			</div>
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$bmm -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Business Management & Marketing</div>
					<h2>{{$bmm -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bmm -> name}}</h4>
					</div>
				</div>
			</div>
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$fip -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Finance International Program</div>
					<h2>{{$fip -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$fip -> name}}</h4>
					</div>
				</div>
			</div>
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$bis -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Business Information Systems</div>
					<h2>{{$bis -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bis -> name}}</h4>
					</div>
				</div>
			</div>
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$comm -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Communication</div>
					<h2>{{$comm -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$comm -> name}}</h4>
					</div>
				</div>
			</div>
    	</div>
	</div>
	<div class="hero-slider-warp">
		<div class="hero-slider owl-carousel">
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$cs -> img_url}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$cs -> post_title}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$cs -> name}}</h4>
					</div>
				</div>
			</div>
		
			<div class="hero-item set-bg" data-setbg="img/hero/1.jpg">
				<div class="pa-text">
					<div class="pa-tag">people</div>
					<h2>69 Flavio Burg Suite</h2>
					<div class="pa-author">
						<img src="img/Hero/author.jpg" alt="">
						<h4>Arthur Rose</h4>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="img/hero/2.jpg">
				<div class="pa-text">
					<div class="pa-tag">people</div>
					<h2>69 Flavio Burg Suite</h2>
					<div class="pa-author">
						<img src="img/Hero/author.jpg" alt="">
						<h4>Arthur Rose</h4>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="img/hero/3.jpg">
				<div class="pa-text">
					<div class="pa-tag">people</div>
					<h2>69 Flavio Burg Suite</h2>
					<div class="pa-author">
						<img src="img/Hero/author.jpg" alt="">
						<h4>Arthur Rose</h4>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="img/hero/4.jpg">
				<div class="pa-text">
					<div class="pa-tag">people</div>
					<h2>69 Flavio Burg Suite</h2>
					<div class="pa-author">
						<img src="img/Hero/author.jpg" alt="">
						<h4>Arthur Rose</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section end -->
@endsection