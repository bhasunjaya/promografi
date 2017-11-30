@extends('dummy')
@section('content')

	<section class="">
		<div class="container">

			@if(session('notification'))
			<div class="notification is-primary">
				{{session('notification')}}
			</div>
			@endif
			<div class="box">

			@foreach($igdata->data as $r)
			<article class="media">
				<figure class="media-left">
					<p class="image is-64x64">
						<img src="{{$r->images->thumbnail->url}}">
					</p>
				</figure>
				<div class="media-content">
					<div class="content">
						<div>
							<strong>{{$r->caption->from->full_name}}</strong> <small>({{$r->caption->from->username}})</small>
							<p>{{$r->caption->text}}</p>
						</div>
					</div>
					<nav class="level is-mobile">
						<div class="level-left">
							<form action="{{url('ig/post')}}" method="post">
								{{csrf_field()}}
								<input type="hidden" name="unique_id" value="{{$r->id}}">
								<input type="hidden" name="image" value="{{$r->images->standard_resolution->url}}">
								<input type="hidden" name="content" value="{{$r->caption->text}}">
								<input type="hidden" name="author" value="{{$r->user->username}}">
								<input type="hidden" name="source" value="{{$r->link}}">
							 <button type="submit" class="button level-item">
								<span class="icon is-small"><i class="fa fa-plus"></i></span>
								<span>share as promo ads</span>
							 </button>
							 </form>

						</div>
					</nav>
				</div>
			</article>
			@endforeach
			</div>
		</div>

	</section>
@endsection
