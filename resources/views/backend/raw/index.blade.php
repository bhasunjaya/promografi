@extends('backend') @section('content') {!! $raws->links() !!}
<a href="{{route('raw.create')}}" class="btn btn-default">Instagram Fetch</a>
<hr>

@foreach($raws as $raw)
<div class="media">
	<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{$raw->image}}" alt="..." style="width:120px">
		</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{$raw->source}}" target="_blank">{{$raw->author}}</a> <small>{{$raw->tipe}}</small></h4>
		<p>{{$raw->content}}</p>
		<p><a href="{{route('post.create')}}?rid={{$raw->id}}" class="btn btn-xs btn-info">create post from this source</a>
		</p>
	</div>
</div>
@endforeach

{!! $raws->links() !!} @endsection
