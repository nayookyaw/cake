@if (!$products)
	<tr><td colspan="4">There is no products</td></tr>
@endif
@foreach( $products as $product)
		<tr>
			<td class="name"><h4>{{ $product->name }}</h4></td>
			<td class="img" data-value= "{{ $product->description }}" p-index = "{{ $product->name }}">
				<img src="/uploads/{{ $product->file_name }}" width="150px" height="100px"/></td>
			<td>{{ $product->price }} kyats</td>
		</tr>
@endforeach
