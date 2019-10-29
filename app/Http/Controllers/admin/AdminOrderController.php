<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use Auth;
use DB;
use PDF;

class AdminOrderController extends Controller
{
	public function getAllOrder()
	{
		$orders = DB::table('orders')
								->leftjoin('users', 'orders.user_id', '=', 'users.id')
								->select('orders.user_id as user_id', 'orders.updated_at as updated_at', 'users.name as user_name')
								->get();

		$orders = $orders->unique('user_id');
		$orders->values()->all();
		return view('/tmp/adminOrderTmpl', compact('orders', $orders));
	}

	public function getOrderDetail($user_id)
	{
		$orders = DB::table('orders')
								->leftjoin('products', 'orders.product_id', '=', 'products.id')
								->orderBy('updated_at', 'desc')
								->where('orders.user_id', '=', $user_id)
								->select('orders.*', 'products.name as product_name', 'products.price as product_price')
								->get();
		$user = DB::table('users')
								->where('users.id', '=', $user_id)
								->select('name')
								->first();

		return view('/admin/adminOrderDetail', compact('orders', $orders, 'user', $user, 'user_id', $user_id ));
	}

	public function closeOrder(Request $inputs)
	{
		$user_id = $inputs->get('user_id');

		DB::table('orders')->where('orders.user_id', '=', $user_id)->delete();
	}

	public function cancelOrder(Request $inputs)
	{
		$user_id = $inputs->get('user_id');
		$product_id = $inputs->get('product_id');
		$date = $inputs->get('date');

		DB::table('orders')->where('orders.user_id', '=', $user_id)
					->where('orders.product_id', '=', $product_id)
					->where('orders.updated_at', '=', $date)
					->delete();

		DB::table('order_histories')->where('order_histories.user_id', '=', $user_id)
					->where('order_histories.product_id', '=', $product_id)
					->where('order_histories.updated_at', '=', $date)
					->delete();
	}

	public function individualOrder(Request $inputs)
	{
		$order_id = $inputs->get('order_id');
		$user_id = $inputs->get('user_id');

		$order_info = DB::table('orders')->where('orders.id', '=', $order_id)
					->where('orders.user_id', '=', $user_id)
					->first();

		$delivery = new \App\Delivery;
		$delivery->user_id = $user_id;
		$delivery->product_id = $order_info->product_id;
		$delivery->product_qty = $order_info->product_qty;
		$delivery->total = $order_info->total;
		$delivery->save();

		DB::table('orders')->where('orders.id', '=', $order_id)
					->where('orders.user_id', '=', $user_id)
					->delete();


	}
}
