@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="/css/admin/product.css">
@endsection

@section('content')
	<br>
	<div class="content">
		<h3>Product Create</h3>
		<br><br><br>
		<div class="product_content">
			<form>
				Product Name <br>
				<input class="name form-control" type="text" autofocus>
				<span class="name_error"></span>
				<br><br><br>
				Product Price <br>
				<input class="price form-control" type="text"/>
				<span class="price_error"></span>
				<br><br>
				Upload a image <br>
				<input class="file" type="file" class="form-control"/>
				<span class="file_error"></span>
				<br><br>
				<input type="button" class="create_product btn btn-success btn-block" value="Add">

			</form>
		</div>
	</div>

@endsection

@section('js')
	<script src="../../js/admin/productCreate.js"></script>
@endsection
