<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{asset('favicon.ico.png')}}">

	<title>PROMOGRAFI</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/toastr.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/backend.css')}}" rel="stylesheet">

</head>

<body>

	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}">Discount at Malls</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				@if(Auth::id())
				<ul class="nav navbar-nav">
					<li><a href="{{route('raw.index')}}">Raw</a></li>
					<li><a href="{{route('post.index')}}">Post</a></li>
					<li><a href="{{route('mall.index')}}">Mall</a></li>
					<li><a href="{{route('category.index')}}">Category</a></li>


					{{--
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li> --}}
				</ul>
				@endif
				<ul class="nav navbar-nav navbar-right">
					@guest
					<li><a href="{{ route('login') }}">Login</a></li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endguest
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container">

		@yield('content')

	</div>
	<!-- /container -->


	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/toastr.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/backend.js')}}"></script>
</body>

</html>
