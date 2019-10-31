@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/delivery.css">
@endsection

@section('content')
<br>
	<h3>Delivery Summary</h3>
	<br>
	<table id="delivery_table">
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Total Amount</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>

@endsection

@section('js')
	<script src="../js/admin/adminDelivery.js"></script>
	<script src="../js/common.js"></script>
@endsection
