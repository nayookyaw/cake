@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Order Detail</h3><br>
	<span class="">
		<span class="user"><span class="glyphicon glyphicon-user"></span>&nbsp;{{ $user->name }}</span> <br>
		The Total Amount is <span class="summary"></span> kyats
		<button data-index= "{{ $user_id }}" class="close_order btn btn-success">Deliver</button>
	</span>
	<br><br>
	<table id="order_detail_table" number-per-page="10" current-page="0">
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
			@foreach($orders as $order)
				<tr>
					<td>{{ $order->product_name }}</td>
					<td>{{ $order->product_qty }}</td>
					<td>{{ $order->product_price }}</td>
					<td class="total">{{ $order->total }}</td>
					<td>{{ $order->updated_at }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection

@section('js')
	<script src="../../../js/admin/adminOrderDetail.js"></script>
	<script src="../../../js/library/simplepagination.js"></script>
@endsection
