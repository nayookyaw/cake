@if(count($order_histories) == 0)
	<tr><td colspan="5">There is no order history lists</td></tr>
@endif

@if ($order_histories)
	@foreach($order_histories as $order_history)
		<tr>
			<td>{{ $order_history[0]->user_name }}</td>
			<td>{{ $order_history[0]->total }}</td>
			<td><a href="/admin/cash/detail/{{ $order_history->user_id }}"<button class="btn_order_detail btn btn-warning">Detail</button></td>
		</tr>
	@endforeach
@endif
