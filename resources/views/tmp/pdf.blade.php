
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Order Lists</title>
		<style media="screen">
			body {
				padding: 0 40px;
			}
			.total {
				color: red;
			}
			.logo {
				position: absolute;
				top: 0px;
				right: 0px;
			}
			span {
				font-size: 18px;
			}
			table thead tr{
				text-align: center;
				color: white;
				background-color: green;
			}
			table thead tr th {
				padding: 10px;
			}
			table tr td {
				padding: 10px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<span class="logo">Nay Oo Kyaw Bakery Service</span><br><br><br>
		<span>Name : {{ Auth::user()->name }}</span><br>
		<span>Date : {{ $current_date }}</span><br>
		<span>The Total Amount is <span class="total">{{ $total_amount }}</span> kyats</span>
		<br><br>

		<table border="0">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Product Price</th>
					<th>Total Amount</th>
					<th>Order Date</th>
				</tr>
			</thead>

			@foreach($orders as $order)
				<tr>
					<td>{{ $order->product_name }}</td>
					<td>{{ $order->product_qty }}</td>
					<td>{{ $order->product_price }}</td>
					<td>{{ $order->total }}</td>
					<td>{{ $order->updated_at }}</td>
				</tr>
			@endforeach
		</table>
	</body>
</html>
