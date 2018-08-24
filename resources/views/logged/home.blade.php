@extends('layouts.logged.master')

@section('css')
	<link rel="stylesheet" href="/css/logged/loggedHome.css">
@endsection

@section('content')
	<br><br>
	<div class="">
		<h3>New Products</h3>
		<hr>
		<div class="content">
			<table id="product_table" number-per-page="10" current-page="0">
				<tbody></tbody>
			</table>
		</div>

	</div>
	</div>
@endsection


@section('js')
	<script src="/js/logged/loggedHome.js"></script>
@endsection
