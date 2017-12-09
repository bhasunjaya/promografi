@extends('frontend')
<!-- -->
@section('content')
<!-- end product -->
<!-- end product -->
<section class="official-shop segments-page divider">
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
