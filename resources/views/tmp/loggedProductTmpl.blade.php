@if (!$products)
	<tr><td colspan="4">There is no products</td></tr>
@endif
@foreach( $products as $product)
		<tr data-index = "{{ $product->id }}">
			<td class="name"><h4>{{ $product->name }}</h4></td>
			<td class="img" data-value= "{{ $product->description }}" p-index = "{{ $product->name }}">
				<img src="/uploads/{{ $product->file_name }}" width="150px" height="100px"/></td>
			<td class="price">{{ $product->price }}</td>
			<td class="description">{{ $product->description }}</td>
			@if (Auth::check())
				<td><button class="btn_buy btn btn-info btn-sm"><span class="glyphicon glyphicon-plus-sign"></span>Add to Cart</button></td>
			@endif
		</tr>
@endforeach
