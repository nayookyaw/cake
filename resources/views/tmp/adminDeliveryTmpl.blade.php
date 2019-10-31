@if(count($delivery_info) == 0)
	<tr><td colspan="5">There is no delivery lists</td></tr>
@endif

@foreach($delivery_info as $delivery)
	<tr>
		<td>{{ $delivery->user_name }}</td>
		<td>{{ $delivery->updated_at }}</td>
		<td><a href="/admin/delivery/detail/{{ $delivery->user_id }}"<button class="btn_order_detail btn btn-warning">Detail</button></td>
	</tr>
@endforeach
