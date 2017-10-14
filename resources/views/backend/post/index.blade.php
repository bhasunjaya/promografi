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
			<th>Image</th>
			<th>Category</th>
			<th>Post</th>
			<th>Date</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr id="row-{{$post->id}}">
			<td><a href="{{$post->image}}">view image</a></td>
			<td><a href="#">{{$post->category->title}}</a></td>
			<td>
				<a href="#">{{$post->title}}</a>
				<p class="small">{{$post->excerpt}}</p>
			</td>
			<td>{{$post->start_at}} - {{$post->end_at}}</td>
			<td>
				<a href="{{route('post.edit',$post->id)}}"  class="btn btn-xs btn-info">edit</a>
				<a href="{{ route('post.destroy',$post->id) }}" class="btn btn-xs btn-danger delete">delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{$posts->links()}} @endsection
