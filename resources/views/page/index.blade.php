@extends('frontend') @section('content')


<section class="product segments-page divider">
	<div class="ui container">
		<div class="section-title">
			<h3>Promo Pilihan</h3>
			<div class="line"></div>
		</div>
		<div class="ui stackable grid">
			@foreach($featured as $post)
			<div class="four wide column pr">
				<div class="content">
					<a href="{{url('promo/'.$post->slug)}}"><img src="{{$post->image}}" alt="{{$post->title}}"></a>
					<a href="{{url('promo/'.$post->slug)}}">
						<h2>{{$post->title}}</h2>
					</a>
					<h5>{{showTimeLeft($post)}}</h5>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>
<!-- product -->
<section class="product segments divider">
	<div class="ui container">
		<div class="section-title">
			<h3>Don't Miss it!</h3>
			<div class="line"></div>
		</div>
		<div class="ui stackable grid">
			@foreach($missit as $post)
			<div class="four wide column pr">
				<div class="content">
					<a href="{{url('promo/'.$post->slug)}}"><img src="{{$post->image}}" alt="{{$post->title}}"></a>
					<a href="{{url('promo/'.$post->slug)}}">
						<h2>{{$post->title}}</h2>
					</a>
					<h5>{{showTimeLeft($post)}}</h5>
				</div>
			</div>
			@endforeach
			<div class="sixteen wide column full">
				<div class="link">
					<a href="{{url('promo')}}" class="link-color">Promo yang akan berakhir lainnya <i class="fa fa-angle-right"></i></a>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- product -->
<section class="product segments divider">
	<div class="ui container">
		<div class="section-title">
			<h3>Promo Terbaru</h3>
			<div class="line"></div>
		</div>
		<div class="ui stackable grid">
			@foreach($recent as $post)
			<div class="four wide column pr">
				<div class="content">
					<a href="{{url('promo/'.$post->slug)}}"><img src="{{$post->image}}" alt="{{$post->title}}"></a>
					<a href="{{url('promo/'.$post->slug)}}">
						<h2>{{$post->title}}</h2>
					</a>
					<h5>{{showTimeLeft($post)}}</h5>
				</div>
			</div>
			@endforeach
			<div class="sixteen wide column full">
				<div class="link">
					<a href="{{url('promo')}}" class="link-color">Selengkapnya <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- end product -->
<section class="official-shop segments">
	<div class="ui container">
		<div class="section-title">
			<h3>Malls</h3>
			<div class="line"></div>
		</div>
		<div class="ui stackable grid">
			@foreach($malls as $mall)
			<div class="two wide column pr">
				<div class="content-image">
					<a href="{{url('mall/'.$mall->slug)}}"><img src="{{asset('uploads/'.$mall->image)}}" alt="{{$mall->title}} {{$mall->city}}"></a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection
