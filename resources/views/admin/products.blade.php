@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Product Lists</h3>

	<div class="function">
		<a href="/admin/productcreate"><button class="create_product btn btn-success">Add</button></a>
	</div>

	<br>
	<table id="product_table" number-per-page="10" current-page="0">
		<thead>
			<tr>
				<th>Product Code</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Updated Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>

@endsection

@section('js')
	<script src="../js/admin/products.js"></script>
	<script src="../js/common.js"></script>
@endsection
