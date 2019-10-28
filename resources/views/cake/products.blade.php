@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/products.css">
@endsection

@section('content')
<br>
	<br><br>
	<div class="product_lists">
		<table id="product_table" number-per-page="10" current-page="0">
			<tbody></tbody>
		</table>
	</div>

@endsection

@section('js')
	<script src="js/cake/cakeProducts.js"></script>
	<script src="js/common.js"></script>
@endsection
