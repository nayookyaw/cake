<?php

namespace App\Http\Controllers\logged;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Log;

class LoggedOrderController extends Controller
{
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

	public function deleteTempOrder(Request $inputs)
	{
		$product_id = $inputs->get('product_id');
		DB::table('orders_temps')->where('product_id', '=', $product_id)->delete();

		return;
	}

}
