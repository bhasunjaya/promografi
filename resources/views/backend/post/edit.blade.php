@extends('backend')
<!-- -->
@section('content')
<div class="row">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<?php echo Form::model($post, [
    'route' => ['post.update', $post->id],
    'method' => 'PUT',
    "files" => true]
); ?>

		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo Form::hidden('rid', request('rid')); ?>
				<?php echo Form::bsText('title'); ?>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="form-group">
							<label for="category_id" class="control-label">Category Id</label>
							<?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<?php echo Form::bsText('start_at', date('Y-m-d')); ?>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<?php echo Form::bsText('end_at', date('Y-m-d')); ?>
					</div>
				</div>


				<?php echo Form::bsTextarea('excerpt'); ?>
				<?php echo Form::bsTextarea('content'); ?>

				<div class="form-group">
					<label for="malls" class="control-label">Malls</label>
					<select class="mall-select form-control" name="malls[]" multiple="multiple">
						@foreach($malls as $mall)
						<option value="{{$mall->id}}" @if(in_array($mall->id, $post->malls->pluck('id')->toArray()))selected="selected"@endif>{{$mall->title}}</option>
						@endforeach
					</select>
				</div>


				<div class="row">
					<div class="col-sm-4">
						<img src="{{$post->image}}" class="img-responsive">
					</div>
					<div class="col-sm-8">

						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" id="exampleInputFile" name="image">
						</div>
					</div>
				</div>

			</div>
			<div class="panel-footer">

				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>


		<?php echo Form::close(); ?>

	</div>
	@if($post->raw)
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div class="thumbnail">
			<img src="{{$post->raw->image}}" alt="...">
			<div class="caption">
				<h3>{{$post->raw->author}}</h3>
				<p>{{$post->raw->content}}</p>
				<p>
					<a href="{{$post->raw->source}}" class="btn btn-primary" role="button" target="_blank">source</a>
				</p>
			</div>
		</div>
	</div>
	@endif
	<!-- -->
	@endsection