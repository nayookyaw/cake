@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/products.css">
@endsection

@section('content')
<br><br>
	<div class="product_lists">
		<ul id="items">
			<li>item in first column</li>
			<li>item in first column</li>
			<li>item in first column</li>

			<li>item in second column</li>
			<li>item in second column</li>
			<li>item in second column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in first column</li>
			<li>item in first column</li>
			<li>item in first column</li>

			<li>item in second column</li>
			<li>item in second column</li>
			<li>item in second column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>

			<li>item in third column</li>
			<li>item in third column</li>
			<li>item in third column</li>
		</ul>
		<div id="items-pagination" style="display:none">
			<a id="items-previous" href="#">&laquo; Previous</a>
			<a id="items-next" href="#">Next &raquo;</a>
		</div>
	</div>

@endsection

@section('js')
	<script src="js/cake/products.js"></script>
@endsection
