<?php

namespace App\Http\Controllers\logged;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use PDF;
use DB;
use Log;

class LoggedOrderController extends Controller
{
	public function getAllOrder()
	{
		$user_id = Auth::user()->id;
		$orders = DB::table('orders')
								->leftjoin('products', 'orders.product_id', '=', 'products.id')
								->orderBy('updated_at', 'desc')
								->where('orders.user_id', '=', $user_id)
								->select('orders.*', 'products.name as product_name', 'products.price as product_price')
								->get();
		return view('/tmp/loggedOrder', compact('orders', $orders));
	}

	public function orderExport(Request $inputs, $total_amount)
	{
		$user_id = Auth::user()->id;
		$orders = DB::table('orders')
								->leftjoin('products', 'orders.product_id', '=', 'products.id')
								->orderBy('updated_at', 'desc')
								->where('orders.user_id', '=', $user_id)
								->select('orders.*', 'products.name as product_name', 'products.price as product_price')
								->get();

			$current_date = date('Y-m-d H:i:s');
			$pdf = PDF::loadView('/tmp/pdf', compact('orders', $orders, 'current_date', $current_date, 'total_amount', $total_amount));
			return $pdf->download('orders_list.pdf');
	}

	public function getOrderTmp()
	{
		$user_id = Auth::user()->id;
		$order_tmps = DB::table('orders_temps')
								->orderBy('updated_at', 'desc')
								->select('product_id', 'user_id', 'product_name', 'price')
								->where('orders_temps.user_id', '=', $user_id)
								->distinct('product_id')
								->get();

		return view('/tmp/loggedOrderTmpl', compact('order_tmps', $order_tmps));
	}

	public function saveOrder(Request $inputs)
	{
		$user_id = Auth::user()->id;
		$order_lists = $inputs->all();
		unset($order_lists['_token']);

		foreach ($order_lists as $order_list) {
			foreach ($order_list as $order) {
				foreach ($order as $value) {
					$product_qty = $value['qty'];
					if (!$product_qty) { return response()->json("Enter Valid Quantity", 400); }
				}
			}
		}

		foreach ($order_lists as $order_list) {
			foreach ($order_list as $order) {
				foreach ($order as $value) {
					$product_id = $value['product_id'];
					$product_qty = $value['qty'];
					$total = $value['total'];

					if (!$product_qty) { return response()->json($validator->messages(), 400); }

					$order = new \App\Order;
					$order->user_id = $user_id;
					$order->product_id = $product_id;
					$order->product_qty = $product_qty;
					$order->total = $total;
					$order->save();

					DB::table('orders_temps')->where('user_id', '=', $user_id)->delete();
				}
			}
		}
	}

	public function deleteTempOrder(Request $inputs)
	{
		$product_id = $inputs->get('product_id');
		DB::table('orders_temps')->where('product_id', '=', $product_id)->delete();

		return;
	}

}
