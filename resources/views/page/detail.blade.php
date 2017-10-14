@extends('frontend') @section('content')
<section class="content">
	<section class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<!--Description-->

					<!--end Description-->

					<!--Details & Location-->
					<section>
						<div class="row">
							<div class="col-md-8">
								<section>
									<h2>Description</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tincidunt, sapien sagittis sollicitudin dapibus, risus mi euismod elit, in dictum justo lacus sit amet dui. Sed faucibus vitae nisl at dignissim.
									</p>
								</section>
							</div>

							<div class="col-md-4">
								<h2>Details</h2>
								<dl>
									<dt>Date Added</dt>
									<dd>05.04.2017</dd>
									<dt>Type</dt>
									<dd>Offer</dd>
									<dt>Status</dt>
									<dd>Used</dd>
									<dt>First Owner</dt>
									<dd>Yes</dd>
									<dt>Material</dt>
									<dd>Wood, Leather</dd>
									<dt>Color</dt>
									<dd>White, Grey</dd>
									<dt>Height</dt>
									<dd>47cm</dd>
									<dt>Width</dt>
									<dd>203cm</dd>
									<dt>Length</dt>
									<dd>54cm</dd>
								</dl>
							</div>
						</div>
					</section>
					<!--end Details and Locations-->

					<hr>
					<!--Similar Ads-->
					<section>
						<h2>Similar Ads</h2>
						<div class="items list compact">
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
									<div class="description">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
									</div>
									<!--end description-->
									<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
								</div>
							</div>
							<!--end item-->
						</div>
					</section>

				</div>

				<div class="col-md-3"></div>
			</div>
		</div>

	</section>
</section>
@endsection
