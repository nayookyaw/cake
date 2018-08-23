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
								->distinct('user_id')
								->get();
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
}
