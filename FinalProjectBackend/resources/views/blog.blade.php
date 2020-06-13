@extends('layout/main')

<!-- Custom styles for this template -->
<link href="css/new-age.css" rel="stylesheet">

@section('container')
<!-- Blog Section end -->
<section class="blog-section">
	<div class="nice-scroll">
		<div class="blog-grid-warp">
			<div class="blog-grid-sizer"></div>
			@foreach($cs as $cs)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$cs -> img_url}}" alt="">
					<div class="bi-tag">{{$cs -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$cs -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$cs -> post_id}}">{{$cs -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($design as $design)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$design -> img_url}}" alt="">
					<div class="bi-tag">{{$design -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$design -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$design -> post_id}}">{{$design -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($ib as $ib)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$ib -> img_url}}" alt="">
					<div class="bi-tag">{{$ib -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$ib -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$ib -> post_id}}">{{$ib -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($bmm as $bmm)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$bmm -> img_url}}" alt="">
					<div class="bi-tag">{{$bmm -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$bmm -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$bmm -> post_id}}">{{$bmm -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($fip as $fip)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$fip -> img_url}}" alt="">
					<div class="bi-tag">{{$fip -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$fip -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$fip -> post_id}}">{{$fip -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($bis as $bis)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$bis -> img_url}}" alt="">
					<div class="bi-tag">{{$bis -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$bis -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$bis -> post_id}}">{{$bis -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			@foreach($comm as $comm)
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/post/{{$comm -> img_url}}" alt="">
					<div class="bi-tag">{{$comm -> cat_name}}</div>
					<div class="bi-text">
						<div class="bi-date">{{$comm -> created_at}} | 3 Comment</div>
						<h3><a href="/blog-details/{{$comm -> post_id}}">{{$comm -> post_title}} </a></h3>
					</div>
				</div>
			</div>
			@endforeach
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/2.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Leica M10-D Is a Simplified Version Of The </a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/3.jpg" alt="">
					<div class="bi-tag">camera</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">Art Photo Exhibition In America</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/4.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Biggest Cinema Event In 2019</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/5.jpg" alt="">
					<div class="bi-tag">animal</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Most Expensive Cameras On The Planet</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/7.jpg" alt="">
					<div class="bi-tag">People</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Biggest Cinema Event In 2019</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/9.jpg" alt="">
					<div class="bi-tag">camera</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">Camera Type	Digital Camera With Rangefinder</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/8.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The D-Lux 7 Is Leica's Brand New Premium Compact </a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/6.jpg" alt="">
					<div class="bi-tag">camera</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Biggest Cinema Event In 2019</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/10.jpg" alt="">
					<div class="bi-tag">animal</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">Meet David The Photographer</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/12.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">Camera Type	Digital Camera With Rangefinder</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/14.jpg" alt="">
					<div class="bi-tag">camera</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">Ahead Of Our Full Sony A6400 Review, We've </a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/11.jpg" alt="">
					<div class="bi-tag">animal</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">A Unique Colourful And Elegant Design </a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/15.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Female Body Shape Men Find</a></h3>
					</div>
				</div>
			</div>
			<div class="blog-grid">
				<div class="blog-item">
					<img src="img/blog/13.jpg" alt="">
					<div class="bi-tag">nature</div>
					<div class="bi-text">
						<div class="bi-date">May 19, 2019 | 3 Comment</div>
						<h3><a href="/blog-details">The Leica M10-D Is a Simplified Version Of The </a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Section end -->
@endsection