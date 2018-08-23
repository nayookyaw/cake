@if(count($orders) == 0)
	<tr><td colspan="5">There is no order lists</td></tr>
@endif

@foreach($orders as $order)
	<tr>
		<td>{{ $order->user_name }}</td>
		<td>{{ $order->updated_at }}</td>
		<td><a href="/admin/orders/detail/{{ $order->user_id }}"<button class="btn_order_detail btn btn-warning">Detail</button></td>
	</tr>
@endforeach
