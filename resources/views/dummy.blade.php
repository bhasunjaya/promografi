<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Free Bulma template</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<!-- Bulma Version 0.6.0 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>

<body>

	<!-- START NAV -->
	<nav class="navbar is-white">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item brand-text" href="{{url('/')}}">Promografi</a>
				<div class="navbar-burger burger" data-target="navMenu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div id="navMenu" class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item" href="{{url('ig/hashtag')}}">Submit Ads</a>
				</div>

			</div>
		</div>
	</nav>
	<!-- END NAV -->
	@yield('content')
</body>

</html>
