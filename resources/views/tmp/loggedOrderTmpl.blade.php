
@foreach($order_tmps as $order_tmp)
		<tr data-index="{{ $order_tmp->product_id }}">
			<td>{{ $order_tmp->product_name }}</td>
			<td class="qty"><input type="number" value="1" style="width: 3em" min="1"/></td>
			<td class="price">{{ $order_tmp->price }}</td>
			<td class="total">{{ $order_tmp->price }}</td>
			<td class="action"><button class="btn_order_delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
			</tr>
@endforeach
