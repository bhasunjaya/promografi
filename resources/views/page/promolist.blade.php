@extends('frontend') @section('content')


<!-- product -->
<section class="product segments-page divider">
	<div class="ui container">

		<div class="section">
			<div class="section-title">
				<h1>Promo Terbaru</h1>
				<div class="line"></div>
			</div>
			<div class="ui stackable grid">
				@foreach($posts as $post)
				<div class="four wide column pr">
					<div class="content">
						<a href="{{url('promo/'.$post->slug)}}"><img src="{{$post->image}}" alt=""></a>
						<a href="{{url('promo/'.$post->slug)}}">
							<h2>{{$post->title}}</h2>
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
</section>

@endsection
