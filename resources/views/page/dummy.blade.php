@extends('dummy')

@section('content')
<section class="hero is-link">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">Turn Your Instagram Like to Promotions</h1>
				<h2 class="subtitle">Like and start share to other</h2>
				<a href="{{url('ig')}}" class="button is-white">Connect With Your Instagram</a>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="columns">
				@foreach($raws as $r)
				<div class="column">
					<div class="card">
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="{{$r->image}}" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">

								<div class="media-content">
									<p class="title is-4">{{$r->author}}</p>
								</div>
							</div>

							<div class="content">
								{{$r->content}}
								<br>
								<a href="{{$r->source}}">source</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection
