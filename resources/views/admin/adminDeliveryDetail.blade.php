@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../../css/admin/delivery.css">
@endsection

@section('content')
<br>
	<h3>Cash Detail</h3><br>
	<span class="">
		<span class="glyphicon glyphicon-user"></span>&nbsp;{{ $user->name }} <br>
		The Total Amount is <span class="summary">{{ $total }}</span> kyats
	</span>
	<br><br>
	<table id="delivery_detail_table">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Product Qty</th>
				<th>Total</th>
				<th>Delivery Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($delivery_info as $delivery)
				<tr>
					<td>{{ $delivery->product_name }}</td>
					<td>{{ $delivery->product_qty }}</td>
					<td class="total">{{ $delivery->total }}</td>
					<td>{{ $delivery->updated_at }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection

@section('js')
	<script src="../../../js/admin/adminDeliveryDetail.js"></script>
	<script src="../../../js/common.js"></script>
@endsection
