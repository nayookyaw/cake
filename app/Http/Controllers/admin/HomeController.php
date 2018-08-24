<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use DB;
use Location;

class HomeController extends Controller
{
	public function summary()
	{
		$now = date("Y-m-d");
		$users = DB::table('order_histories')
			->leftJoin('users', 'order_histories.user_id', '=', 'users.id')
			->whereDate('order_histories.updated_at', '=', $now)
			->orderBy('order_histories.updated_at', 'desc')
			->select('order_histories.total', 'users.name as user_name')
			->get();

		return view('/tmp/todayUsersTmpl', compact('users', $users));
	}
}
