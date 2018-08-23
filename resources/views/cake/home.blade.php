@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/cakeHome.css">
@endsection

@section('content')
<br><br><br><br>
	<h4>Top Products</h4>
	<hr/>
	<div class="product_body">
		<img src="" width="180px" height="300px"> &nbsp;
		<img src="" width="180px" height="300px"> &nbsp;
		<img src="" width="180px" height="300px"> &nbsp;
		<img src="" width="180px" height="300px"> &nbsp;
		<img src="" width="180px" height="300px"> &nbsp;
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
        <div class="overlay">
           <h2>Hover effect 1v2</h2>
           <a class="info" href="#">link here</a>
        </div>
    </div>
</div>
@endsection

@section('js')
	<script src="/js/cake/cakeHome.js"></script>
@endsection
