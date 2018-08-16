@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<br>
<div class="content">
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
				<th>Last Updated</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>

@endsection

@section('js')
	<script src="../js/admin/products.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
