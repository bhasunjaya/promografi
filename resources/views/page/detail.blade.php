@extends('frontend')
<!-- -->
@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	<li class="breadcrumb-item"><a href="{{route('categories')}}">Kategori</a></li>
	<li class="breadcrumb-item"><a href="{{route('category',$post->category->slug)}}">{{$post->category->title}}</a></li>
	<li class="breadcrumb-item active">{{$post->title}}</li>
</ol>
@endsection

<!-- -->
@section('page-title')
<!--============ Page Title =========================================================================-->
<div class="page-title">
	<div class="container clearfix">
		<div class="float-left float-xs-none">
			<h1>{{$post->title}}</h1>
			<h4 class="location">
				@foreach($post->malls as $mall)
				<a href="{{route('mall',$mall->slug)}}">{{$mall->title}}</a>
				@endforeach
			</h4>
		</div>
		<div class="float-right float-xs-none price">
			<div class="number">Sisa</div>
			<div class="id opacity-50">
				<strong>{{showTimeLeft($post)}} hari lagi</strong>
			</div>
		</div>
	</div>
	<!--end container-->
</div>
@endsection

<!-- -->
@section('content')
<section class="content">
	<section class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<article class="blog-post clearfix">
						<img src="{{asset($post->image)}}" alt="" class="img-responsive">
						<div class="blog-post-content">
							<h2>Deskripsi</h2>
							<p>{{$post->content}}</p>
							<hr>
							<div class="de">
								<h2>Lokasi</h2>
								<dl>
									@foreach($post->malls as $mall)
									<dt><a href="{{route('mall',$mall->slug)}}">{{$mall->title}}</a></dt>
									<dd>KOTA</dd>
									@endforeach
								</dl>
							</div>
							@foreach($post->malls as $mall) @endforeach
						</div>
						<!--end blog-post-content-->
					</article>

					<!--end Article-->


					<!--Description-->

					<!--end Description-->



				</div>

				<div class="col-md-4">
					<aside class="sidebar">
						<section>
							<h2>Similar Ads</h2>
							<div class="items compact">
								<div class="item">
									<div class="ribbon-featured">Featured</div>
									<!--end ribbon-->
									<div class="wrapper">
										<div class="image">
											<h3>
                                                        <a href="#" class="tag category">Home & Decor</a>
                                                        <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                                        <span class="tag">Offer</span>
                                                    </h3>
											<a href="single-listing-1.html" class="image-wrapper background-image">
                                                        <img src="assets/img/image-01.jpg" alt="">
                                                    </a>
										</div>
										<!--end image-->
										<h4 class="location">
                                                    <a href="#">Manhattan, NY</a>
                                                </h4>
										<div class="price">$80</div>
										<div class="meta">
											<figure>
												<i class="fa fa-calendar-o"></i>02.05.2017
											</figure>
											<figure>
												<a href="#">
                                                            <i class="fa fa-user"></i>Jane Doe
                                                        </a>
											</figure>
										</div>
										<!--end meta-->
									</div>
									<!--end wrapper-->
								</div>
								<!--end item-->
							</div>
						</section>
					</aside>

				</div>
			</div>
		</div>

	</section>
</section>
@endsection
