@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="/css/admin/home.css">
@endsection

@section('content')
<br><br><br><br>
	<h4>TOP</h4>
	<hr/>
	<div class="action">
		<button class="products btn btn-warning"><a href="/admin/products">Products</a></button>
		<button class="orders btn btn-info"><a href="/admin/orders">Orders</a></button>
	</div>

	<h4>Daily Overview</h4>
	<hr/>

	<table border="1">
		<tr>
			<th>Customer Name</th>
			<th>Total</th>
		</tr>
	</table>
</div>
@endsection

@section('js')
	<script src="../js/admin/home.js"></script>
@endsection
