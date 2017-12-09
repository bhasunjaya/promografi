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
		</div>
			<div class="pagination">
				{{$posts->links()}}
			</div>
		</div>
	</div>
</div>

@endsection
