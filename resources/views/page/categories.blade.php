@extends('frontend')
<!-- -->
@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	<li class="breadcrumb-item active">Kategori</li>
</ol>
@endsection

<!-- -->
@section('page-title')
<div class="page-title">
	<div class="container">
		<h1 class="center">
			Kategori Promo
		</h1>
		<p class="center">Semua Kategori ada disini</p>
	</div>
</div>
@endsection

<!-- -->
@section('content')


<section class="block">
	<div class="container">
		<ul class="categories-list clearfix">
			@foreach($categories as $category)
			<li>
				<i class="category-icon">
							<img src="assets/icons/category-furniture-b.png" alt="">
						</i>
				<h3><a href="{{route('category',$category->slug)}}">{{$category->title}}</a></h3>
				<div class="sub-categories">
					<p>{{$category->description}}</p>
				</div>
			</li>
			@endforeach
		</ul>
		<!--end categories-list-->
	</div>
	<!--end container-->
</section>
@endsection
