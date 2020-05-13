@extends('layout/main')

@section('container')
<!-- Gallery Section end -->
<section class="gallery-section">
	<div class="gallery-header">
		<h4>Gallery</h4>
		<ul class="gallery-filter">
			<li><a href="/login" class="btn btn-primary">Post</a></li>
			<li class="filter all active" data-filter="*">All</li>
			<li class="filter" data-filter=".featured">CS</li>
			<li class="filter" data-filter=".people">Design</li>
			<li class="filter" data-filter=".nature">IB</li>
			<li class="filter" data-filter=".animal">BMM</li>
			<li class="filter" data-filter=".travel">FIP</li>
			<li class="filter" data-filter=".BIS">BIS</li>
			<li class="filter" data-filter=".Comm">Comm</li>
		</ul>
	</div>
	<div class="nice-scroll">
		<div class="gallery-warp">
			<div class="grid-sizer"></div>
			<div class="gallery-item gi-big featured">
				<a class="fresco" href="img/gallery/1.jpg" data-fresco-group="projects">
					<img src="img/gallery/1.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item people">
				<a class="fresco" href="img/gallery/2.jpg" data-fresco-group="projects">
					<img src="img/gallery/2.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item nature">
				<a class="fresco" href="img/gallery/3.jpg" data-fresco-group="projects">
					<img src="img/gallery/3.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item gi-long travel">
				<a class="fresco" href="img/gallery/4.jpg" data-fresco-group="projects">
					<img src="img/gallery/4.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item gi-big animal">
				<a class="fresco" href="img/gallery/6.jpg" data-fresco-group="projects">
					<img src="img/gallery/6.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item gi-big featured">
				<a class="fresco" href="img/gallery/5.jpg" data-fresco-group="projects">
					<img src="img/gallery/5.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item travel">
				<a class="fresco" href="img/gallery/7.jpg" data-fresco-group="projects">
					<img src="img/gallery/7.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item people">
				<a class="fresco" href="img/gallery/8.jpg" data-fresco-group="projects">
					<img src="img/gallery/8.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item animal">
				<a class="fresco" href="img/gallery/9.jpg" data-fresco-group="projects">
					<img src="img/gallery/9.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item gi-big travel">
				<a class="fresco" href="img/gallery/10.jpg" data-fresco-group="projects">
					<img src="img/gallery/10.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item featured">
				<a class="fresco" href="img/gallery/11.jpg" data-fresco-group="projects">
					<img src="img/gallery/11.jpg" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Gallery Section end -->
@endsection