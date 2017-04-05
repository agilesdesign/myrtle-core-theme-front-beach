<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

	<!-- Styles -->
	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"!-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">


	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link href="css/select2-bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

	<style>
		body {
			font-family: 'Lato';
		}

		.fa-btn {
			margin-right: 6px;
		}
	</style>
</head>
<body id="app-layout">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-static-top navbar-dark bg-inverse mb-1">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ url('/') }}">
						Point Park University
					</a>
				</div>
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
					&#9776;
				</button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a href="{{ url('/vendors') }}" class="nav-link">Vendors</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<!-- Authentication Links -->
						@if (Auth::guest())
							<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
						@else
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<div class="dropdown-menu" role="menu">
									<a class="dropdown-item" href="{{ url('/logout') }}">
											<i class="fa fa-btn fa-sign-out"></i>
											Logout
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<i class="fa fa-fw fa-gears"></i>
									<span class="caret"></span>
								</a>
								<div class="dropdown-menu" role="menu">
									<a href="{{ url('/commodities') }}" class="dropdown-item">Commodities</a>
									<a href="{{ url('/phonetypes') }}" class="dropdown-item">Phone Types</a>
									<a href="{{ url('/addresstypes') }}" class="dropdown-item">Address Types</a>
									<a href="{{ url('/certificationfiletypes') }}" class="dropdown-item">Certification Types</a>
								</div>
							</li>

						@endif
					</ul>
				</div>
			</nav>
		</div>
	</div>
	@if (!$errors->isEmpty())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			{{ $error }}<br>
			@endforeach
		</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="card card-outline-secondary">
					<div class="card-block">
						<h3 class="card-title">@yield('page-title')</h3>
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.select2:not(.tags)').select2();
			$('.select2.tags').select2({tags: true});
			$('.datetimepicker').datetimepicker({
				format: "Y-MM-DD HH:mm:ss"
			});
		});
	</script>
	{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
	@yield('scripts')
</body>
</html>
