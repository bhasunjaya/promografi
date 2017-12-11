@extends('backend') @section('content') @include('include.modal')

@if(session('message'))
<div class="alert alert-success">
	{{session('message')}}
</div>
@endif
<div class="text-right">
	<a href="{{route('post.create')}}" class="btn btn-default">Create</a>
</div>
<hr>
<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
	<thead>
		<tr>
			<th>Post</th>
			<th class="col-md-1">Status</th>
			<th class="col-md-1">Date</th>
			<th class="col-md-2">Option</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr id="row-{{$post->id}}">
			<td>
				@if($post->is_featured)
				<span class="label label-danger">featured</span>
				@endif
				<a href="{{route('post.edit',$post->id)}}">{{$post->title}}</a>
				<p class="small">{{$post->excerpt}}</p>
				<p>
					@foreach($post->malls as $m)
					<a href="#" class="btn btn-xs btn-info">{{$m->title}}</a>
					@endforeach
				</p>
				<p>
					<a href="#">{{$post->category->title}}</a>
				</p>
			</td>
			<td><p class="small">{{$post->is_publish ? 'yes': 'draft'}}</p></td>
			<td><p class="small">{{$post->end_at}}</p></td>
			<td>
				<a href="{{$post->image}}"  class="btn btn-xs btn-info" target="_blank">img</a>
				<a href="{{route('post.edit',$post->id)}}"  class="btn btn-xs btn-info">edit</a>
				<a href="{{ route('post.destroy',$post->id) }}" class="btn btn-xs btn-danger delete">delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{$posts->links()}} @endsection
