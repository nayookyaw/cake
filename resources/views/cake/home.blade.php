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


<div class="hvrbox">
	<img src="img/photos/photo1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
	<div class="hvrbox-layer_top hvrbox-layer_rotate">
		<div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	</div>
</div>

</div>
@endsection

@section('js')
	<script src="/js/cake/cakeHome.js"></script>
@endsection
