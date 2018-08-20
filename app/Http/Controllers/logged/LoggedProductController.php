<?php

namespace App\Http\Controllers\logged;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Log;

class LoggedProductController extends Controller
{
	public function getAll(Request $inputs)
	{
		$products = DB::table('products')->orderBy('updated_at', 'desc')->get();

		return view('/tmp/loggedProductTmpl', compact('products', $products));
	}

	public function addOrder(Request $inputs)
	{
		$product_id = $inputs->get('id');
		$product_name = $inputs->get('name');
		$product_price = $inputs->get('price');
		$user_id = Auth::user()->id;

		$order_tmp = new \App\OrdersTemp;
		$order_tmp->user_id = $user_id;
		$order_tmp->product_id = $product_id;
		$order_tmp->product_name = $product_name;
		$order_tmp->price = $product_price;
		$order_tmp->save();
	}
}
