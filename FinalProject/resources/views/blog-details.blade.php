@extends('layout/main')



@section('container')

@foreach($details as $details)
<!-- Blog Section end -->
<section class="blog-details">
	<div class="container">
		<div class="single-blog-page">
			<div class="blog-metas">
				<div class="blog-meta">{{$details ['created_at']}}</div>
				<div class="blog-meta">3 Comment</div>
			</div>
			<h2>{{$details ['post_title']}}</h2>
			<div class="blog-thumb">
				<div class="thumb-cata">{{$details ['cat_name']}}</div>
				<img src="{{ asset('img/post/'.$details ['img_url']) }}" alt="">
			</div>
			<p>{{$details ['post_description']}}</p>
			<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p> -->
			
			<div class="row blog-gallery">
				<div class="col-lg-3 p-0">
					<div class="bg-item">
						<img src="{{ asset('img/blog-details/1.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-lg-9 p-0">
					<div class="row m-0">
						<div class="col-lg-4 p-0">
							<div class="bg-item">
								<img src="{{ asset('img/blog-details/2.jpg') }}" alt="">
							</div>
						</div>
						<div class="col-lg-8 p-0">
							<div class="bg-item">
								<img src="{{ asset('img/blog-details/3.jpg') }}" alt="">
							</div>	
						</div>
						<div class="col-lg-8 p-0">
							<div class="bg-item">
								<img src="{{ asset('img/blog-details/4.jpg') }}" alt="">
							</div>	
						</div>
						<div class="col-lg-4 p-0">
							<div class="bg-item">
								<img src="{{ asset('img/blog-details/5.jpg') }}" alt="">
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-lg-6 mb-4">
					<a href="#" class="post-cata">people</a>
					<a href="#" class="post-cata">Photography</a>
					<a href="#" class="post-cata">nature</a>
				</div>
				<div class="col-lg-6 mb-5 text-left text-md-right">
					<div class="post-share">
						<span>Share:</span>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a>
					</div>
				</div>
			</div>
			<div class="blog-navigation">
				<div class="row m-0">
					<div class="col-lg-6 p-0">
						<a href="#" class="bn-item set-bg" data-setbg="{{ asset('img/blog-details/blog-prev.jpg') }}">
							<h4><i class="ti-arrow-left"></i> The Female Body Shape Men Find Most Attractive</h4>
						</a>
					</div>
					<div class="col-lg-6 p-0">
						<a href="#" class="bn-item bn-next set-bg" data-setbg="{{ asset('img/blog-details/blog-next.jpg') }}">
							<h4><i class="ti-arrow-right"></i>Vietnam's largest art community</h4>
						</a>
					</div>
				</div>
			</div>
			<div class="recent-blog">
				<h3 class="mb-4 pb-2">Recommended For You</h3>
				<div class="row">
					<div class="col-lg-4">
						<div class="blog-item rp-item set-bg" data-setbg="{{ asset('img/blog/6.jpg') }}">
							<div class="bi-tag">nature</div>
							<div class="bi-text">
								<div class="bi-date">May 19, 2019 | 3 Comment</div>
								<h3><a href="blog-details.html">The Biggest Cinema Event In 2019</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog-item rp-item set-bg" data-setbg="{{ asset('img/blog/4.jpg') }}">
							<div class="bi-tag">nature</div>
							<div class="bi-text">
								<div class="bi-date">May 19, 2019 | 3 Comment</div>
								<h3><a href="blog-details.html">The Biggest Cinema Event In 2019</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog-item rp-item set-bg" data-setbg="{{ asset('img/blog/3.jpg') }}">
							<div class="bi-tag">nature</div>
							<div class="bi-text">
								<div class="bi-date">May 19, 2019 | 3 Comment</div>
								<h3><a href="blog-details.html">The Biggest Cinema Event In 2019</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="comment-option">
				<h3>2 Comments</h3>
				<div class="single-comment-item first-comment">
					<div class="sc-author">
						<img src="{{ asset('img/blog-details/user-1.jpg') }}" alt="">
					</div>
					<div class="sc-text">
						<span>27 Aug 2019</span>
						<h5>Brandon Kelley</h5>
						<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.lit, sed quia non numquam eius modi tempora numquam eius modi tempora..</p>
						<a href="#" class="comment-btn like-btn">Like</a>
						<a href="#" class="comment-btn">Reply</a>
					</div>
				</div>
				<div class="single-comment-item reply-comment">
					<div class="sc-author">
						<img src="{{ asset('img/blog-details/user-2.jpg') }}" alt="">
					</div>
					<div class="sc-text">
						<span>27 Aug 2019</span>
						<h5>Mia Maya</h5>
						<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.lit, sed quia non numquam eius modi tempora numquam eius modi tempora.</p>
						<a href="#" class="comment-btn like-btn">Like</a>
						<a href="#" class="comment-btn">Reply</a>
					</div>
				</div>
				<div class="single-comment-item second-comment ">
					<div class="sc-author">
						<img src="{{ asset('img/blog-details/user-3.jpg') }}" alt="">
					</div>
					<div class="sc-text">
						<span>27 Aug 2019</span>
						<h5>Mike Phillips</h5>
						<p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.lit, sed quia non numquam eius modi tempora numquam eius modi tempora.</p>
						<a href="#" class="comment-btn like-btn">Like</a>
						<a href="#" class="comment-btn">Reply</a>
					</div>
				</div>
			</div>
			<div class="comment-form">
				<h3>Leave A Comment</h3>
				<form action="#">
					<div class="row">
						<div class="col-md-4">
							<input type="text" placeholder="Name">
						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Email">
						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Phone">
						</div>
						<div class="col-md-12">
							<textarea placeholder="Comment"></textarea>
							<button type="submit">Post Comment</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endforeach
<!-- Blog Section end -->
@endsection