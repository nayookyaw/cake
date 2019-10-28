@extends('layouts.logged.master')

@section('css')
	<link rel="stylesheet" href="../../css/logged/orders.css">
@endsection

@section('content')
<br>
	<h2> Order Lists </h2><br>
	<div class="content">

		<div class="order_lists">
			<span class="total_summary">
				The Total Amount :
				<span class="summary"></span>&nbsp;kyats
			</span>
			<span class="export_order">
				<a href=""><button class="btn_export_order btn btn-success">Export</button></a>
			</span>
			<br><br><br>
			<table id="order_table" number-per-page="5" current-page="0">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Total</th>
						<th>Order Date</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>

@endsection

@section('js')
	<script src="../../js/logged/loggedOrdersDetail.js"></script>
	<script src="../../js/common.js"></script>
@endsection
