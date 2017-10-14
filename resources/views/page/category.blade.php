@extends('frontend')

<!-- -->
@section('breadcrumbs')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	<li class="breadcrumb-item"><a href="{{route('categories')}}">Kategori</a></li>
	<li class="breadcrumb-item active">{{$category->title}}</li>
</ol>
@endsection

<!-- -->
@section('page-title')
<div class="page-title">
	<div class="container">
		<h1 class="center">
			Kategori Promo {{ucwords($category->title)}}
		</h1>
		<p class="center">{{$category->description}}</p>
	</div>
</div>
@endsection

<!-- -->
@section('content')

<section class="block">
	<div class="container">
		<!--============ Items ==========================================================================-->
		<div class="items list grid-xl-4-items grid-lg-3-items grid-md-2-items">

			@foreach($posts as $post)
			@include('include.item')
			@endforeach
		</div>


	</div>
</section>
@endsection
