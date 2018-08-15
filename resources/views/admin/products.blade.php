@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
@endsection

@section('content')
<br>
<div class="content">
	<h3>Product Lists</h3>

	<div class="function">
		<button class="create_product btn btn-success">Add</button>
	</div>

	<br>
	<table>
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Last Updated</th>
			<th>Action</th>
		</tr>
	</table>
</div>

@endsection

@section('js')
	<script src="../../../js/admin/products.js"></script>
@endsection
