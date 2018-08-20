@extends('layouts.logged.master')

@section('css')
	<link rel="stylesheet" href="../css/logged/orders.css">
@endsection

@section('content')
<br><br>
	<div class="content">
		<div class="order_lists">
			<div class="total_summary">
				The Total Amount :
				<span class="summary"></span>&nbsp;kyats
			</div>
			<br>
			<table id="order_table" number-per-page="5" current-page="0">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>

@endsection

@section('js')
	<script src="../js/logged/loggedOrders.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
