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
								->select('orders.user_id as user_id', 'users.name as user_name')
								->distinct('user_id')
								->get();
		return view('/tmp/adminOrderTmpl', compact('orders', $orders));
	}
}
