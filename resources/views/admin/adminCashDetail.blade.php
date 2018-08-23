@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Cash Detail</h3><br>
	<span class="">
		<span class="glyphicon glyphicon-user"></span>&nbsp;{{ $user->name }} <br>
		The Total Amount is <span class="summary"></span> kyats
	</span>
	<br><br>
	<table id="cash_detail_table" number-per-page="10" current-page="0">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Product Qty</th>
				<th>Price</th>
				<th>Total</th>
				<th>Order Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order_histories as $order_history)
				<tr>
					<td>{{ $order_history->product_name }}</td>
					<td>{{ $order_history->product_qty }}</td>
					<td>{{ $order_history->product_price }}</td>
					<td class="total">{{ $order_history->total }}</td>
					<td>{{ $order_history->updated_at }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection

@section('js')
	<script src="../../../js/admin/adminCashDetail.js"></script>
	<script src="../../../js/library/simplepagination.js"></script>
@endsection
