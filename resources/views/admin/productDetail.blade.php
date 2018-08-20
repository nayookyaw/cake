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
				@if ($product->file_name)
					<img data-index= "{{ $product->file_name }}" id ="product_img" src="/uploads/{{ $product->file_name }}" width="200px" height="150px">
				@else
					<img data-index= "" id ="product_img" src="/uploads/no_image.jpg" width="200px" height="150px">
				@endif

				<button class="btn_clear_img btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button><br>
				<input class="file" type="file" class="form-control"/>
				<br>
				Product Name <br>
				<input class="name form-control" type="text" value=" {{$product->name}} ">
				<span class="name_error"></span>
				<br><br>
				Product Price <br>
				<input class="price form-control" type="text" value=" {{$product->price}} ">
				<span class="price_error"></span>
				<br><br>
				Product Description <br>
				<input class="description form-control" type="text" value=" {{$product->description}} ">
				<span class="description_error"></span>
				<br><br>
				<button type="button" data-index ="{{ $product->id }}" class="update_product btn btn-warning btn-block">Update</button>
			</form>
		</div>
	</div>

@endsection
