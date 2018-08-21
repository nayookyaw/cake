@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Order Lists</h3>

	<br>
	<table id="order_table" number-per-page="10" current-page="0">
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Order Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>

@endsection

@section('js')
	<script src="../js/admin/adminOrders.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
