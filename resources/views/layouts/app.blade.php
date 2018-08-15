<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bakery Service Platform</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="/css/admin/home.css">

		<link rel="stylesheet" href="/css/library/bootstrap.css">
		<link rel="stylesheet" href="/css/library/bootstrap.min.css">
		<link rel="stylesheet" href="/css/library/tipped.css">

		<link rel="stylesheet" href="/css/logged/master/main.css">
		<link rel="stylesheet" href="/css/logged/master/header.css">
		<link rel="stylesheet" href="/css/logged/master/menu.css">
		<link rel="stylesheet" href="/css/logged/master/footer.css">

		<!-- library js  -->
		<script src="../js/library/jquery-3.3.1.js"></script>
		<script src="../js/library/jquery-3.3.1.min.js"></script>
		<script src="../js/library/bootstrap.min.js"></script>
		<script src="../js/library/bootstrap.js"></script>
		<script src="../js/library/tipped.js"></script>
		<script src="../js/library/select2.min.js"></script>
		<script src="../js/library/tilt.jquery.min.js"></script>
		<script src="../js/library/sweetalert.js"></script>
</head>
<body>
	<div class="header">
		@section('header')
	</div>
	<div class="menubar">
		@section('menubar')
			<div id="nav">
				<ul>
					<li class="active"><a href="{{ url('/admin/home') }}">HOME</a></li>
					<li class=""><a href="/admin/products">PRODUCTS</a></li>
					<li class=""><a href="/orders">ORDERS</a></li>
					<li><a href="/faq">FAQ</a></li>
					<li><a href="/contact">CONTACT US</a></li>
						@if (!Auth::guest())
							<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
									LOGOUT
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
							</form>
						@endif

						@if( Auth::check())
							<li class=""><a href="#">{{ Auth::user()->name }}</a></li>
						@endif
				</ul>
			</div>
	</div>

  <div class="content">
      @yield('content')
  </div>

	<div class="footer">
		@section('footer')
		Bakery Service Center, © 2018 All Right Reserved.
	</div>


	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="../js/admin/home.js"></script>
</body>
</html>
