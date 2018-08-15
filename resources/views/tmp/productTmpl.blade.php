@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->price}}</td>
			<td>{{ $product->updated_at }}</td>
			<td><a href="{{ url('admin/product/detail/'.$product->id) }}"><button class="edit_btn btn btn-warning">Edit</button></a></td>
		</tr>
@endforeach
