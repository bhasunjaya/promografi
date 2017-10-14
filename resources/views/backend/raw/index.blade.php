@extends('backend') @section('content')

{!! $raws->links() !!}
<table class="table table-hover">

	<tbody>
		@foreach($raws as $raw)
		<tr>
			<td>
				<div class="media">
					<div class="media-left">
						<a href="#"><img class="media-object" src="{{$raw->image}}" style="width:80px;"></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><a href="#">{{$raw->author}}</a></h4>
						<p>{{$raw->content}}</p>
						<p>
							<a href="{{route('post.create')}}?rid={{$raw->id}}">create post</a>
						</p>
					</div>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{!! $raws->links() !!}

@endsection
