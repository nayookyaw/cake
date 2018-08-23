
@if(count($order_histories) == 0)
	<tr><td colspan="6">There is no order lists</td></tr>
@endif

@foreach($order_histories as $order_history)
	<tr>
		<td>{{ $order_history->user_name }}</td>
		<td>{{ $order_history->product_name }}</td>
		<td>{{ $order_history->product_qty }}</td>
		<td>{{ $order_history->product_price }}</td>
		<td class="total">{{ $order_history->total }}</td>
		<td>{{ $order_history->updated_at }}</td>
	</tr>
@endforeach
