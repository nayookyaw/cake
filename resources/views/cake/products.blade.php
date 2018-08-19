@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/products.css">
@endsection

@section('content')
<br>
	<div class="product_lists">
		<table>
			<tr>
				<td><h4>asdf</h4><img src="" width="200px" height="150px"/><br><br>200kyats
				<button class="btn btn-info btn-xs">Buy</button></td>
				<td><h4>asdf</h4> <img src="" width="200px" height="150px"/><br>200kyats</td>
				<td><h4>Name</h4> <img src="" width="200px" height="150px"/><br>200kyats</td>
			</tr>
			<tr>
				<td><h4>Name</h4> <img src="" width="200px" height="150px"/>200kyats
				<button>Buy</button></td>
				<td><h4>Name</h4> <img src="" width="200px" height="150px"/>200kyats</td>
				<td><h4>Name</h4> <img src="" width="200px" height="150px"/>200kyats</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>

@endsection

@section('js')
	<script src="js/cake/products.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
