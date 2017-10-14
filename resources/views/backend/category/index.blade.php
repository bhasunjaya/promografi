@extends('backend')

@section('content')
@include('include.modal')
<h3>Category</h3>
<p>
	<a href="{{route('category.create')}}" class="btn btn-info">create</a>
</p>

@if(session('message'))
<div class="alert alert-info">
	{{session('message')}}
</div>
@endif

<div class="category-table">
	<table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr id="row-{{$category->id}}">
				<td>{{$category->slug}}</td>
				<td>
					<strong>{{$category->title}}</strong>
					<p>{{$category->description}}</p>
				</td>
				<td class="col-md-2">

					 <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info btn-xs">edit</a>
					 <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-xs btn-danger delete">edit</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

@endsection
