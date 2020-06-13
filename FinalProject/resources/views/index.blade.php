@extends('layout/main')



@section('container')
<!-- Hero Section end -->
<section class="hero-section">
	<div class="pana-accordion" id="accordion">
		<div class="pana-accordion-wrap">
		<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$cs1['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					
					<h2>{{$cs1['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$cs1  ['name']}}</h4>
					</div>
				</div>
			</div>
			

			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$design1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Design</div>
					<h2>{{$design1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$design1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$ib1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">International Business</div>
					<h2>{{$ib1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$ib1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$bmm1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Business Management & Marketing</div>
					<h2>{{$bmm1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bmm1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$fip1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Finance International Program</div>
					<h2>{{$fip1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$fip1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$bis1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Business Information Systems</div>
					<h2>{{$bis1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bis1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
			
			<div class="pana-accordion-item set-bg" data-setbg="img/post/{{$comm1  ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Communication</div>
					<h2>{{$comm1  ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$comm1  ['name']}}</h4>
					</div>
				</div>
			</div>
			
    	</div>
	</div>
	<div class="hero-slider-warp">
		<div class="hero-slider owl-carousel">
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$cs2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$cs2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$cs2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$design2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$design2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$design2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$ib2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$ib2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$ib2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$bmm2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$bmm2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bmm2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$fip2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$fip2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$fip2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$bis2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$bis2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$bis2 ['name']}}</h4>
					</div>
				</div>
			</div>
		
		
			<div class="hero-item set-bg" data-setbg="img/post/{{$comm2 ['img_url']}}">
				<div class="pa-text">
					<div class="pa-tag">Computer Science</div>
					<h2>{{$comm2 ['post_title']}}</h2>
					<div class="pa-author">
						<img src="img/LogoHome.png" alt="">
						<h4>{{$comm2 ['name']}}</h4>
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