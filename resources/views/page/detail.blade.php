@extends('frontend')
<!-- -->

<!-- -->
@section('content')
<div class="product-details segments-page">

	<div class="ui container">

		<div class="ui breadcrumb">
			<a href="{{url('/')}}" class="section">Home</a>
			<i class="right angle icon divider"></i>
			<a  href="{{url('/category/'.$post->category->slug)}}" class="section">{{$post->category->title}}</a>
			<i class="right angle icon divider"></i>
			<div class="active section">{{$post->title}}</div>
		</div>

		<div class="ui stackable grid">
			<div class="ten wide column">
				<img class="ui centered  image" src="{{asset($post->image)}}" alt="{{$post->title}}">
			</div>
			<div class="six wide column">
				<h1>{{$post->title}}</h1>

				<div class="desc-short">
					<p class="title2">{{$post->excerpt}}</p>
					<span class="ui red tag label">{{showTimeLeft($post)}}</span> {{--
					<p>{{$post}}</p> --}} {{--
					<button class="button"><i class="fa fa-shopping-cart"></i>Add to cart</button> --}}
				</div>
				<div class="desc-long">
					<h5>Lokasi</h5>
					<div class="ui horizontal list">
						@foreach($post->malls as $mall) {{--
						<div class="item"> --}}
							<a href="{{route('mall',$mall->slug)}}" class="item">
							<img class="ui avatar image" src="{{asset('uploads/'.$mall->image)}}" alt="gambar {{$mall->title}} {{$mall->city}} ">
							<div class="content">
								<div class="header">{{$mall->title}}</div> {{$mall->city}}
							</div>
							</a> {{-- </div> --}} @endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="desc-long">
			<h5>Deskripsi</h5>
			<p>{!! nl2br($post->content) !!}</p>
		</div>

	</div>
</div>
<!-- end product details -->
@endsection
