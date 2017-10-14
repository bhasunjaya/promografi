@extends('frontend') @section('content')
{{-- <section class="block">
	<div class="container">
		<h2>Categories</h2>
		<ul class="categories-list clearfix">
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-furniture-b.png" alt="">
                            </i>
				<h3><a href="#">Furniture</a></h3>
				<div class="sub-categories">
					<a href="#">Beds</a>
					<a href="#">Sofas</a>
					<a href="#">Garden</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-pets-b.png" alt="">
                            </i>
				<h3><a href="#">Pets</a></h3>
				<div class="sub-categories">
					<a href="#">Dogs</a>
					<a href="#">Cats</a>
					<a href="#">Exotic</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" alt="">
                            </i>
				<h3><a href="#">Real Estate</a></h3>
				<div class="sub-categories">
					<a href="#">Houses</a>
					<a href="#">Apartments</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-jobs-b.png" alt="">
                            </i>
				<h3><a href="#">Jobs</a></h3>
				<div class="sub-categories">
					<a href="#">Find Job</a>
					<a href="#">Offer Job</a>
				</div>
			</li>
			<!--end category item-->

			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-cars-b.png" alt="">
                            </i>
				<h3><a href="#">Car</a></h3>
				<div class="sub-categories">
					<a href="#">New</a>
					<a href="#">Used</a>
					<a href="#">Rent</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-mobile-b.png" alt="">
                            </i>
				<h3><a href="#">Mobile</a></h3>
				<div class="sub-categories">
					<a href="#">Apple</a>
					<a href="#">Samsung</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-cameras-b.png" alt="">
                            </i>
				<h3><a href="#">Cameras</a></h3>
				<div class="sub-categories">
					<a href="#">Photo</a>
					<a href="#">Video</a>
					<a href="#">Lenses</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-sport-b.png" alt="">
                            </i>
				<h3><a href="#">Sport</a></h3>
				<div class="sub-categories">
					<a href="#">Ski</a>
					<a href="#">Bike</a>
					<a href="#">Hockey</a>
				</div>
			</li>
			<!--end category item-->

			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-electro-b.png" alt="">
                            </i>
				<h3><a href="#">Electro</a></h3>
				<div class="sub-categories">
					<a href="#">TV</a>
					<a href="#">Radio</a>
					<a href="#">PC</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-clothing-b.png" alt="">
                            </i>
				<h3><a href="#">Clothing</a></h3>
				<div class="sub-categories">
					<a href="#">Shirts</a>
					<a href="#">Trousers</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-books-b.png" alt="">
                            </i>
				<h3><a href="#">Books</a></h3>
				<div class="sub-categories">
					<a href="#">Fantasy</a>
					<a href="#">History</a>
					<a href="#">Sci-Fi</a>
				</div>
			</li>
			<!--end category item-->
			<li>
				<i class="category-icon">
                                <img src="assets/icons/category-music-b.png" alt="">
                            </i>
				<h3><a href="#">Music</a></h3>
				<div class="sub-categories">
					<a href="#">Rock</a>
					<a href="#">Techno</a>
					<a href="#">Folk</a>
				</div>
			</li>
			<!--end category item-->
		</ul>
		<!--end categories-list-->
	</div>
	<!--end container-->
</section> --}}

<!--============ Recent Ads =============================================================================-->
<section class="block">
	<div class="container">
		<h2>Recent Ads</h2>
		<div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
			@foreach(range(0,20) as $cv)
			<div class="item">
				<div class="wrapper">
					<div class="image">
						<h3>
                                        <a href="#" class="tag category">Real Estate</a>
                                        <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                        <span class="tag">Offer</span>
                                    </h3>
						<a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="{{asset('images/dummy.jpg')}}" alt="">
                                    </a>
					</div>
					<!--end image-->
					<h4 class="location"><a href="#">Greeley, CO</a></h4>
					<div class="price">$75,000</div>
					<div class="meta">
						<figure>
							<i class="fa fa-calendar-o"></i>13.03.2017
						</figure>
						<figure>
							<a href="#">
                                            <i class="fa fa-user"></i>Hills Estate
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
								<figure>Area</figure>
								<aside>368m<sup>2</sup></aside>
							</li>
							<li>
								<figure>Bathrooms</figure>
								<aside>2</aside>
							</li>
							<li>
								<figure>Bedrooms</figure>
								<aside>3</aside>
							</li>
							<li>
								<figure>Garage</figure>
								<aside>1</aside>
							</li>
						</ul>
					</div>
					<!--end addition-info-->
					<a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!--end container-->
</section>
<!--end block-->
<!--============ End Recent Ads =========================================================================-->

@endsection
