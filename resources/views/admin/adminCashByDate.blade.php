@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Cash Summary</h3><br>
	<input type="date" class="from">
	<span class="glyphicon glyphicon-arrow-right"></span>
	<input type="date" class="to"> &nbsp;
	<input type="button" class="search_date btn btn-success btn-sm" value="Search">
	<span class="cash_summary">
		The Total Amount is <span class="summary"></span> kyats
	</span>
	<br><br>
	<table id="cash_bydate_table" number-per-page="10" current-page="0">
		<thead>
			<tr>
				<th>Customer Name</th>
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
					<td>{{ $order_history->user_name }}</td>
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
	<script src="../../../js/admin/adminCashByDate.js"></script>
	<script src="../../../js/library/simplepagination.js"></script>
@endsection
