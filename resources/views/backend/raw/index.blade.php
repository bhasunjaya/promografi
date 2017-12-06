@extends('backend') @section('content') {!! $raws->links() !!}
<a href="{{route('raw.create')}}" class="btn btn-default">Instagram Fetch</a>
<hr>
@foreach($raws->chunk(4) as $k=>$v)
<div class="row">
	@foreach($v as $raw)
	<div class="col-md-3">
		<div class="thumbnail">
			<img src="{{$raw->image}}" alt="...">
			<div class="caption">
				<h3><a href="{{$raw->source}}" target="_blank">{{$raw->author}}</a> <small>{{$raw->tipe}}</small></h3> {{--
				<p>{{$raw->content}}</p> --}}
				<p><a href="{{route('post.create')}}?rid={{$raw->id}}" class="btn btn-xs btn-info">create post from this source</a>
				</p>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endforeach {!! $raws->links() !!} @endsection
