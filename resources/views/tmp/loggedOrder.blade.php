@if(count($orders) == 0)
	<tr><td colspan="5">There is no order lists</td></tr>
@endif

@foreach($orders as $order)
	<tr>
		<td>{{ $order->product_name }}</td>
		<td>{{ $order->product_qty }}</td>
		<td>{{ $order->product_price }}</td>
		<td class="total">{{ $order->total }}</td>
		<td>{{ $order->updated_at }}</td>
	</tr>
@endforeach
