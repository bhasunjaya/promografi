@extends('backend')

<!-- -->
@section('content')
<!-- -->
{!! Form::model($mall, [ 'route' => ['mall.update',$mall], 'method'=>'put', 'files'=>true]) !!}
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-3">
				<img src="{{asset('uploads/'.$mall->image)}}" class="img-responsive" alt="Image">
			</div>
			<div class="col-xs-9">
				{{ Form::bsText('title') }}
				<!-- -->
				{{ Form::bsTextarea('description') }}
				<!-- -->
				{{ Form::bsText('city') }}
				<!-- -->
				<input type="file" name="image">
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>


</form>
@endsection
