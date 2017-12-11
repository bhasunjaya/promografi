@extends('frontend') @section('content')

<!-- product -->
<section class="product segments-page divider">
	<div class="ui container">
		<div class="section-title">
			<h3>Promo Terbaru</h3>
			<div class="line"></div>
		</div>
		<div class="ui stackable grid">
			@foreach($recent as $post)
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


@section('page_title', 'Promo Diskon Terbaru Di Seluruh Mall Jakarta')
@section('page_keywords', 'promo,promosi,discount,diskon,jakarta,mall')
@section('page_description', 'Promografi adalah sebuah info promosi, promo dan discount terlengkap untuk seluruh mall di jakarta')
