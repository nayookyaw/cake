@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="/css/admin/product.css">
@endsection

@section('content')
	<br>
	<div class="content">
		<h3>Product Details</h3>

		<div class="function">
			<button data-index ="{{ $product->id }}" class="delete_product btn btn-danger">Delete</button>
		</div>
		<br><br>

		<div class="product_content">
			<form>
				<img src="/storage/phpSf0JQ1.jpg" width="200px" height="150px">
				<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button><br>
				<input class="file" type="file">
				<br><br>
				Product Name <br>
				<input class="name form-control" type="text" value=" {{$product->name}} ">
				<span class="name_error"></span>
				<br><br>
				Product Price <br>
				<input class="price form-control" type="text" value=" {{$product->price}} ">
				<span class="price_error"></span>
				<br><br>
				<button type="button" data-index ="{{ $product->id }}" class="update_product btn btn-warning btn-block">Update</button>
			</form>
		</div>
	</div>

@endsection
