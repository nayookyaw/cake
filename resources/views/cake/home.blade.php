@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/cakeHome.css">
@endsection

@section('slide')
<hr>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/slide/slide4.jpg" style="width: 100%; height: 70vh;">
			<div class="carousel-caption">
          <h3>Nay Oo Kyaw Bakery Service</h3>
          <p>Enjoy the Great Tastes with Us!!</p>
					<a href="/products"><button class="btn btn-success btn-lg">Get Start</button></a><br><br>
        </div>
		</div>

		<div class="item">
			<img src="img/slide/slide5.jpg" style="width: 100%; height: 70vh;">
			<div class="carousel-caption">
          <h3>Nay Oo Kyaw Bakery Service</h3>
          <p>Enjoy the Great Tastes with Us!!</p>
					<a href="/products"><button class="btn btn-primary btn-lg">Get Start</button></a><br><br>
        </div>
		</div>

		<div class="item">
			<img src="img/slide/slide2.jpg" style="width: 100%; height: 70vh;">
			<div class="carousel-caption">
          <h3>Nay Oo Kyaw Bakery Service</h3>
          <p>Enjoy the Great Tastes with Us!!</p>
					<a href="/products"><button class="btn btn-info btn-lg">Get Start</button></a><br><br>
        </div>
		</div>

		<div class="item">
			<img src="img/slide/slide6.jpg" style="width: 100%; height: 70vh;">
			<div class="carousel-caption">
          <h3>Nay Oo Kyaw Bakery Service</h3>
          <p>Enjoy the Great Tastes with Us!!</p>
					<a href="/products"><button class="btn btn-danger btn-lg">Get Start</button></a><br><br>
        </div>
		</div>

		<div class="item">
			<img src="img/slide/slide6.jpeg" style="width: 100%; height: 70vh;">
			<div class="carousel-caption">
          <h3>Nay Oo Kyaw Bakery Service</h3>
          <p>Enjoy the Great Tastes with Us!!</p>
					<a href="/products"><button class="btn btn-warning btn-lg">Get Start</button></a><br><br>
        </div>
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
@endsection


@section('content')
<br>
	<h3>New Products</h3>
	<hr>
	<div class="content">
		<table id="product_table" number-per-page="10" current-page="0">
			<tbody></tbody>
		</table>
	</div>

</div>
@endsection

@section('js')
	<script src="/js/cake/cakeHome.js"></script>
	<script src="/js/common.js"></script>
@endsection
