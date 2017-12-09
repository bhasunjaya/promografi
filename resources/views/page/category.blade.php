@extends('frontend') @section('content')


<!-- product -->
<section class="product segments divider">
	<div class="ui container">


		<div class="section">
			<div class="section-title">
				<h1><a href="{{route('category',$category->slug)}}">{{$category->title}}</a></h1>
				<div class="line"></div>
			</div>
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
						<a href="" class="link-color">See More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="pagination">
				{{$posts->links()}}
			</div>
		</div>
	</div>
</section>

@endsection @section('content2')

<section class="block">
	<div class="container">
		<div class="items list grid-xl-4-items grid-lg-3-items grid-md-2-items">

			@foreach($posts as $post) @include('include.item') @endforeach
		</div>


	</div>
</section>
@endsection
