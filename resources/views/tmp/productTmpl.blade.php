@if(count($products) == 0)
	<tr><td colspan="5">There is no product lists</td></tr>
@endif

@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->price}}</td>
			<td>{{ $product->description}}</td>
			<td>{{ $product->updated_at }}</td>
			<td><a href="{{ url('admin/product/detail/'.$product->id) }}"><button class="edit_btn btn btn-warning">Edit</button></a></td>
		</tr>
@endforeach
