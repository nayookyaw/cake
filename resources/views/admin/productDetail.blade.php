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

		<div class="product_detail">
			Product Name <br><br>
			<input class="name form-control" type="text" value=" {{$product->name}} ">
			<br><br><br>
			Product Price <br><br>
			<input class="price form-control" type="text" value=" {{$product->price}} ">
			<br><br><br>
			<button data-index ="{{ $product->id }}" class="update_product btn btn-warning btn-block">Update</button>
		</div>
	</div>

@endsection
