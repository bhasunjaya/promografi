@extends('frontend') @section('content')
<div class="profile-seller segments-page">
	<div class="ui container">

		<div class="profile-banner">
			<img src="{{asset('uploads/'.$mall->image)}}" alt="{{$mall->title}} {{$mall->city}} ">
			<h1>{{$mall->title}}</h1>
			<p>{{$mall->city}}</p>
		</div>
		<div class="ui one item menu">
			<a href="#" class="item" data-tab="product">Promo</a>
		</div>
		<div class="ui tab product active" data-tab="product">

			<div class="ui stackable grid">
				@foreach($posts as $post)
				<div class="four wide column pr">
					<div class="content">
						<a href="{{url('promo/'.$post->slug)}}"><img src="{{$post->image}}" alt=""></a>
						<a href="{{url('promo/'.$post->slug)}}">
							<p>{{$post->title}}</p>
						</a>
						<h5>{{showTimeLeft($post)}}</h5>
					</div>
				</div>
				@endforeach
				<div class="sixteen wide column full">
					<div class="link">

						@if(PaginateRoute::hasPreviousPage()) <a href="{{ PaginateRoute::previousPageUrl() }}" class="link-color" style="float:left"><i class="fa fa-angle-left"></i> Previous</a> @endif
						<!-- -->
						@if(PaginateRoute::hasNextPage($posts)) <a href="{{ PaginateRoute::nextPageUrl($posts) }}" class="link-color">Next <i class="fa fa-angle-right"></i></a> @endif
						<!-- -->
						{{-- <a href="" class="link-color">See More <i class="fa fa-angle-right"></i></a> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('page_title', 'Discount dan Promo di '.$mall->title." ".$mall->city)
@section('page_keywords', 'promo,promosi,discount,diskon,jakarta,mall')
@section('page_description', 'Semua Promo, discount, diskon dan sale termurah di '.$mall->title.' '.$mall->city)
