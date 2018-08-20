@extends('layouts.logged.master')

@section('css')
	<link rel="stylesheet" href="../css/logged/products.css">
@endsection

@section('content')
<br><br>
	<div class="add_to_orders">
		<h5>Order lists</h5><br>
		<div id="order_form">
			<!-- <label class="name">afasdfdfsadfme</label>
			<label class="qty"><input type="number" value="1" style="width:2.5em"/></label>
			<label class="price">2000</label>
			<label class="total">Total</label> -->
		</div>
		<br>
		<input type="text" placeholder="Total Amount" disabled><br><br>
		<input type="button" class="btn_order_submit btn btn-danger btn-xs" value="Reset">
		<input type="button" class="btn_order_submit btn btn-success btn-xs" value="Submit">
	</div>
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
