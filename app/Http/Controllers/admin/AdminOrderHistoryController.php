<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class AdminOrderHistoryController extends Controller
{
	public function getAllOrderHistories()
	{
		$order_histories = [];
		$orders = DB::table('order_histories')
								->orderBy('updated_at', 'desc')
								->select('order_histories.user_id as user_id')
								->distinct()
								->get();

		foreach ($orders as $order) {
			$user_id = $order->user_id;
			$orders = DB::table('order_histories')
									->leftjoin('users', 'order_histories.user_id', '=', 'users.id')
									->select(DB::raw('SUM(total) as total'), 'users.name as user_name')
									->groupBy('user_name')
									->where('order_histories.user_id', '=', $user_id)
									->get();
			$orders->user_id = $user_id;
			array_push($order_histories, $orders);
		}
		return view('/tmp/adminOrderHistoriesTmpl', compact('order_histories', $order_histories));
	}

	public function getOrderByUserId($user_id)
	{
		$order_histories = DB::table('order_histories')
										->leftjoin('products', 'order_histories.product_id', '=', 'products.id')
										->where('order_histories.user_id', '=', $user_id)
										->select('order_histories.*', 'products.name as product_name', 'products.price as product_price')
										->get();

		$user = DB::table('users')->where('users.id', '=', $user_id)->first();

		return view('/admin/adminCashDetail', compact('order_histories', $order_histories, 'user', $user));
	}

	public function getOrderByDate()
	{
		$order_histories = DB::table('order_histories')
										->leftjoin('users', 'order_histories.user_id', '=', 'users.id')
										->leftjoin('products', 'order_histories.product_id', '=', 'products.id')
										->select('order_histories.*', 'products.name as product_name', 'products.price as product_price', 'users.name as user_name')
										->get();

		return view('/admin/adminCashByDate', compact('order_histories', $order_histories));
	}

	public function getOrderByDateAll(Request $inputs)
	{
		$from = $inputs->get('from');
		$to = $inputs->get('to');

		$order_histories = DB::table('order_histories')
										->leftjoin('users', 'order_histories.user_id', '=', 'users.id')
										->leftjoin('products', 'order_histories.product_id', '=', 'products.id')
										->whereDate('order_histories.created_at', '>=', $from)
										->whereDate('order_histories.created_at', '<=', $to)
										->select('order_histories.*', 'products.name as product_name', 'products.price as product_price', 'users.name as user_name')
										->get();

		return view('/tmp/adminCashByDateTmpl', compact('order_histories', $order_histories));
	}

	public function getOrderByName(Request $inputs)
	{
		
	}
}
