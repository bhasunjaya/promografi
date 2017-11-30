@extends('backend') @section('content') {!! $raws->links() !!}
<button type="button" class="btn btn-default">Fetch From Instagram Like</button>
<a href="{{route('twitter.fetch')}}" class="btn btn-default">Twitter</a>
<hr>

<div class="row">
	<div class="col-md-12">

		@foreach($raws as $raw)
		<div class="media">
			<div class="media-left">
				<a href="#"> <img alt="64x64" class="media-object" style="width: 96px;" src="{{$raw->image}}" > </a>
			</div>
			<div class="media-body">
				<h4 class="media-heading"><a href="{{$raw->source}}" target="_blank">{{$raw->author}}</a> <small>{{$raw->tipe}}</small></h4>
				<p>
					{{$raw->content}}
					<br>
					<a href="{{route('post.create')}}?rid={{$raw->id}}" class="btn btn-xs btn-info">create post from this source</a>
				</p>
			</div>
		</div>
		<hr>
		@endforeach

	</div>
</div>



{!! $raws->links() !!} @endsection
