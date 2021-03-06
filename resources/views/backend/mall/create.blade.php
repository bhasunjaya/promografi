@extends('backend') @section('content') {!! Form::model($mall, ['route' => ['mall.store'],'files'=>true]) !!}
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12">
				{{ Form::bsText('title') }}
				{{ Form::bsTextarea('description') }}
				{{ Form::bsText('city') }}
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
