<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="header">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>

				<div class="menubar">
					@section('menubar')
						<div id="nav">
							<ul>
								<li class=""><a href="/">HOME</a></li>
								<li class=""><a href="/products">PRODUCTS</a></li>
								<li class=""><a href="/">Something</a></li>
								<li><a href="/faq">FAQ</a></li>
								<li><a href="/contact">CONTACT US</a></li>
								<li class="active"><a href="/login">LOGIN</a></li>
							</ul>
						</div>
						<span>Nay Oo Kyaw</span>
				</div>

        <div class="content">
            @yield('content')
        </div>

				<div class="footer">
					@section('footer')
					Bakery Service Center, © 2018 All Right Reserved.
				</div>

    </body>
</html>
