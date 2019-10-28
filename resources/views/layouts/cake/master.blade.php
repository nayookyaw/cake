<html>
    <head>
			<meta charset='utf-8'>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="_token" content="{{ csrf_token() }}">
      <title>Bakery Service Store</title>
			<link rel="shortcut icon" href="img/icon/icon.ico" />

			<!-- library css  -->
			@section('css')
			@show
			<link rel="stylesheet" href="/css/library/bootstrap.css">
			<link rel="stylesheet" href="/css/library/bootstrap.min.css">
			<link rel="stylesheet" href="/css/library/tipped.css">
			<link rel="stylesheet" href="/css/common/common.css">

			<link rel="stylesheet" href="/css/cake/master/main.css">
			<link rel="stylesheet" href="/css/cake/master/header.css">
			<link rel="stylesheet" href="/css/cake/master/menu.css">
			<link rel="stylesheet" href="/css/cake/master/footer.css">

			<!-- library js  -->
			<script src="js/library/jquery-3.3.1.js"></script>
			<script src="js/library/jquery-3.3.1.min.js"></script>
			<script src="js/library/bootstrap.min.js"></script>
			<script src="js/library/bootstrap.js"></script>
			<script src="js/library/tipped.js"></script>
			<script src="js/library/select2.min.js"></script>
			<script src="js/library/tilt.jquery.min.js"></script>
			<script src="js/library/sweetalert.js"></script>
			<script src="js/library/HZpagination.js"></script>

    </head>
    <body>
			<div class="header">
				@section('header')
			</div>
			<div class="menubar">
				@section('menubar')
					<div id="nav">
						<ul>
							<li class="active" id="home"><a href="/">HOME</a></li>
							<li id="products"><a href="/products">PRODUCTS</a></li>
							<li id="contact"><a href="/contact">CONTACT US</a></li>
							<li id="about"><a href="/about">ABOUT US</a></li>
							@if (Auth::check())
									<li id="login"><a href="{{ url('/home') }}">LOGIN</a></li>
							@else
									<li id="login"><a href="{{ url('/login') }}">LOGIN</a></li>
									<li id="register"><a href="{{ url('/register') }}">REGISTER</a></li>
							@endif
						</ul>
					</div>
			</div>

			<div class="slide">
				@yield('slide')
			</div>
      <div class="content">
          @yield('content')
					<br><br><br><br><br><br><br>
      </div>

			<div class="footer">
				@section('footer')
				Nay Oo Kyaw Bakery Service, © 2019 All Right Reserved.
			</div>
			@section('js')
			<script src="{{ asset('js/app.js') }}"></script>
			<script src="../../../js/common.js"></script>
			@show
    </body>

</html>
