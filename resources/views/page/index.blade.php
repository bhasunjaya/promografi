@extends('frontend')
<!-- -->
@section('has-dark-background')
has-dark-background
@endsection
<!-- -->
@section('page-background')
<div class="background">
	<div class="background-image">
		<img src="{{asset('images/hero-background-image-01.jpg')}}" alt="">
	</div>
</div>
@endsection


@section('page-title')
<div class="page-title">
	<div class="container">
		<h1 class="center">
			Kalimat teaser untuk listing <a href="#">promo</a> dan ada keywordnya
		</h1>
	</div>
</div>
@endsection

<!-- -->
@section('content')
<section class="block">
	<div class="container">
		<h2>Featured Ads</h2>
		<div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
			@foreach($featured as $post)
			@include('include.item')
			@endforeach
		</div>
	</div>
</section>
<section class="block">
	<div class="container">
		<div class="block">
			<h2>Selling With Us Is Easy</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="feature-box">
						<figure>
							<img src="assets/icons/feature-user.png" alt="">
							<span>1</span>
						</figure>
						<h3>Create an Account</h3>
						<p>Etiam molestie viverra dui vitae mattis. Ut velit est</p>
					</div>
					<!--end feature-box-->
				</div>
				<!--end col-->
				<div class="col-md-3">
					<div class="feature-box">
						<figure>
							<img src="assets/icons/feature-upload.png" alt="">
							<span>2</span>
						</figure>
						<h3>Submit Your Ad</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<!--end feature-box-->
				</div>
				<!--end col-->
				<div class="col-md-3">
					<div class="feature-box">
						<figure>
							<img src="assets/icons/feature-like.png" alt="">
							<span>3</span>
						</figure>
						<h3>Make a Deal</h3>
						<p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p>
					</div>
					<!--end feature-box-->
				</div>
				<!--end col-->
				<div class="col-md-3">
					<div class="feature-box">
						<figure>
							<img src="assets/icons/feature-wallet.png" alt="">
							<span>4</span>
						</figure>
						<h3>Enjoy the Money!</h3>
						<p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p>
					</div>
					<!--end feature-box-->
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end block-->
	</div>
	<!--end container-->
	<div class="background" data-background-color="#fff" style="background-color: rgb(255, 255, 255);"></div>
	<!--end background-->
</section>

<!--============ Recent Ads =============================================================================-->
<section class="block">
	<div class="container">
		<h2>Recent Ads</h2>
		<div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
			@foreach($recent as $post)
			@include('include.item')
			@endforeach
		</div>
	</div>
	<!--end container-->
</section>
<!--end block-->
<!--============ End Recent Ads =========================================================================-->

@endsection
