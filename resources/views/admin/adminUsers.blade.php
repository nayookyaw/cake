@extends('layouts.admin.master')

@section('css')
	<link rel="stylesheet" href="../../css/admin/product.css">
@endsection

@section('content')
<br>
	<h3>Customer Lists</h3>
	<br>
	<br><br>
	<table id="user_table" number-per-page="10" current-page="0">
		<thead>
			<tr>
				<th>User-Code</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Register Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr data-value ="{{ $user->address }}" data-index = "{{ $user->email }}"
					 data-toggle="tooltip" title="Click to See More!" data-placement="bottom">
					<td class="id">{{ $user->id }}</td>
					<td class="name">{{ $user->name }}</td>
					<td class="phone">{{ $user->phone }}</td>
					<td>{{ $user->updated_at }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection

@section('js')
	<script src="../js/admin/adminUsers.js"></script>
	<script src="../js/library/simplepagination.js"></script>
@endsection
