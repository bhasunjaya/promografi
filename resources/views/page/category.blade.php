@extends('frontend') @section('content')

<section class="block">
	<div class="container">
		<!--============ Items ==========================================================================-->
		<div class="items list grid-xl-4-items grid-lg-3-items grid-md-2-items">
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

			<div class="item">
				<div class="ribbon-featured">Featured</div>
				<!--end ribbon-->
				<div class="wrapper">
					<div class="image">
						<h3>
                                        <a href="#" class="tag category">Jobs</a>
                                        <a href="single-listing-1.html" class="title">Seeking for a Job</a>
                                        <span class="tag">Demand</span>
                                    </h3>
						<a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-06.jpg" alt="">
                                    </a>
					</div>
					<!--end image-->
					<h4 class="location">
                                    <a href="#">Delavan, IL</a>
                                </h4>
					<div class="price">$1,200</div>
					<div class="meta">
						<figure>
							<i class="fa fa-calendar-o"></i>10.03.2017
						</figure>
						<figure>
							<a href="#">
                                            <i class="fa fa-user"></i>Aurelio Thomas
                                        </a>
						</figure>
					</div>
					<!--end meta-->
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
					</div>
					<!--end description-->
					<div class="additional-info">
						<ul>
							<li>
								<figure>Degree</figure>
								<aside>Bachelor’s</aside>
							</li>
							<li>
								<figure>Category</figure>
								<aside>Art & Design</aside>
							</li>
							<li>
								<figure>Experience</figure>
								<aside>5 years</aside>
							</li>
							<li>
								<figure>Language</figure>
								<aside>English, German</aside>
							</li>
						</ul>
					</div>
					<!--end addition-info-->
					<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
				</div>
			</div>
			<!--end item-->


		</div>


		<div class="page-pagination">
			<nav aria-label="Pagination">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>
@endsection
