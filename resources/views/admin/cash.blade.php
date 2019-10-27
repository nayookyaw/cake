@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Cash Summary</h3>
	<br>
	<table id="cash_table" number-per-page="10" current-page="0">
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
	<script src="../js/admin/adminCash.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
