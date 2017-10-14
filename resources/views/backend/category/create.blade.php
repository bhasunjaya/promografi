@extends('backend')

@section('content')

{!! Form::model($category, ['route' => ['category.store']])!!}
	<legend>Form title</legend>


{{ Form::bsText('title') }}
{{ Form::bsTextarea('description') }}



	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
