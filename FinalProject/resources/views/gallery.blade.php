@extends('layout/main')

@section('container')
<!-- Gallery Section end -->
<section class="gallery-section">
	<div class="gallery-header">
		<h4>Gallery</h4>
		<ul class="gallery-filter">
			<!-- <li><a href="/login" class="btn btn-primary">Post</a></li> -->
			<a href="{{ url('/login') }}" class="btn btn-primary">Post</a>
			<li class="filter all active" data-filter="*">All</li>
			<li class="filter" data-filter=".cs">CS</li>
			<li class="filter" data-filter=".design">Design</li>
			<li class="filter" data-filter=".ib">IB</li>
			<li class="filter" data-filter=".bmm">BMM</li>
			<li class="filter" data-filter=".fip">FIP</li>
			<li class="filter" data-filter=".bis">BIS</li>
			<li class="filter" data-filter=".comm">Comm</li>
		</ul>
	</div>
	<div class="nice-scroll">
		<div class="gallery-warp">
			<div class="grid-sizer"></div>
			@foreach($cs as $cs)
			
			<div class="gallery-item gi-small cs">
				<a class="fresco" href="img/post/{{$cs['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$cs['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$cs['name']}}</h6>
				</div>
			</div>
			
			@endforeach
			@foreach($design as $design)
			<div class="gallery-item gi-small design">
				<a class="fresco" href="img/post/{{$design ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$design ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$design ['name']}}</h6>
				</div>
			</div>
			@endforeach
			@foreach($ib as $ib)
			<div class="gallery-item gi-small ib">
				<a class="fresco" href="img/post/{{$ib ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$ib ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$ib ['name']}}</h6>
				</div>
			</div>
			@endforeach
			@foreach($bmm as $bmm)
			<div class="gallery-item gi-small bmm">
				<a class="fresco" href="img/post/{{$bmm ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$bmm ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$bmm ['name']}}</h6>
				</div>
			</div>
			@endforeach
			@foreach($fip as $fip)
			<div class="gallery-item gi-small fip">
				<a class="fresco" href="img/post/{{$fip ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$fip ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$fip ['name']}}</h6>
				</div>
			</div>
			@endforeach
			@foreach($bis as $bis)
			<div class="gallery-item gi-small bis">
				<a class="fresco" href="img/post/{{$bis ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$bis ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$bis ['name']}}</h6>
				</div>
			</div>
			@endforeach
			@foreach($comm as $comm)
			<div class="gallery-item gi-small comm">
				<a class="fresco" href="img/post/{{$comm ['img_url']}}" data-fresco-group="projects">
					<img src="img/post/{{$comm ['img_url']}}" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/LogoHome.png" alt="">
					<h6>{{$comm ['name']}}</h6>
				</div>
			</div>
			@endforeach
			<!-- <div class="gallery-item gi-big featured">
				<a class="fresco" href="img/post/OddOrEven.png" data-fresco-group="projects">
					<img src="img/post/OddOrEven.png" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div>
			<div class="gallery-item gi-big featured">
				<a class="fresco" href="img/post/factorial.png" data-fresco-group="projects">
					<img src="img/post/factorial.png" alt="">
				</a>
				<div class="gi-hover">
					<img src="img/gallery/author.jpg" alt="">
					<h6>Arthur Rose</h6>
				</div>
			</div> -->
			<!-- <div class="gallery-item people">
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
			</div> -->
		</div>
	</div>
</section>
<!-- Gallery Section end -->
@endsection