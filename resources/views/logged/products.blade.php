@extends('layouts.logged.master')

@section('css')
	<link rel="stylesheet" href="../css/logged/products.css">
@endsection

@section('content')
<br><br>
	<div class="product_lists">
		<table id="product_table" number-per-page="10" current-page="0">
			<tbody></tbody>
		</table>
	</div>

@endsection

@section('js')
	<script src="../js/logged/loggedProducts.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
