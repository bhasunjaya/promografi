@extends('backend')

@section('content')
@include('include.modal')
<h3>Malls</h3>
<p>
	<a href="{{route('mall.create')}}" class="btn btn-info">create</a>
</p>

@if(session('message'))
<div class="alert alert-info">
	{{session('message')}}
</div>
@endif

<div class="category-table">
	<table class="table table-bordered table-striped table-hover" data-toggle="dataTable" data-form="deleteForm">
		<thead>
			<tr>
				<th>Image</th>
				<th>Data</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($malls as $mall)
			<tr id="row-{{$mall->id}}">
				<td class="">
					<img src="{{asset('uploads/'.$mall->image)}}" class="img-responsive" style="max-width:64px;" alt="Image">
				</td>
				<td>
					<strong>{{$mall->title}}</strong>
					<p>{{$mall->description}}</p>
				</td>
				<td>

					 <a href="{{ route('mall.edit', $mall->id) }}" class="btn btn-info btn-xs">edit</a>
					 <a href="{{ route('mall.destroy',$mall->id) }}" class="btn btn-xs btn-danger delete">delete</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

@endsection
