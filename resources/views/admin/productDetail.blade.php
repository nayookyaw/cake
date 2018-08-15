@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="/css/admin/product.css">
@endsection

@section('content')
	<br>
	<div class="content">
		<h3>Product Details</h3>

		<div class="function">
			<button class="create_product btn btn-danger">Delete</button>
		</div>
		<br><br>

		Name <input type="text" value=" {{$product->name}} ">
		Price <input type="text" value=" {{$product->price}} ">
		<br><br><br>
		<button class="update_product btn btn-warning">Update</button>

	</div>

@endsection
