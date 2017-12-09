@extends('frontend')
<!-- -->
@section('content')
<!-- end product -->
<section class="official-shop segments divider">
	<div class="ui container">
		<div class="section-title">
			<h3>Categories</h3>
			<div class="line"></div>
		</div>
		<div class="ui list">
			@foreach($categories as $cat)
			<div class="item">
				<div class="header"><a href="{{url('category/'.$cat->slug)}}"> {{$cat->title}}</a></div>
				<p>{{$cat->description}}</p>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
