@if (!$products)
	<tr><td colspan="4">There is no products</td></tr>
@endif
@foreach( $products as $product)
		<tr>
			<td><h4>{{ $product->name }}</h4></td>
			<td class="img" data-value= "{{ $product->description }}"><img src="/uploads/{{ $product->file_name }}" width="150px" height="100px"/></td>
			<td>{{ $product->price }} kyats</td>
			@if (Auth::check())
				<td><button class="btn_buy btn btn-info btn-xs">Buy</button></td>
			@endif
		</tr>
@endforeach
