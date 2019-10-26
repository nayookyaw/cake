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

	public function searchProducts(Request $inputs)
	{
		$search = $inputs->get('search');

		$products = DB::table('products')->orderBy('updated_at', 'desc')
										->where('name','LIKE','%'.$search."%")
										->get();

		return view('/tmp/loggedProductTmpl', compact('products', $products));
	}

	public function searchPrice(Request $inputs)
	{
		$max = $inputs->get('max');
		$min = $inputs->get('min');

		$products = DB::table('products')->orderBy('updated_at', 'desc')
										->whereBetween('price', array($min,$max))
										->get();

		return view('/tmp/loggedProductTmpl', compact('products', $products));
	}

	public function addOrder(Request $inputs)
	{
		$product_id = $inputs->get('id');
		$product_name = $inputs->get('name');
		$product_price = str_replace("kyats", "", $inputs->get('price'));
		$user_id = Auth::user()->id;
		$order_tmp = new \App\OrdersTemp;
		$order_tmp->user_id = $user_id;
		$order_tmp->product_id = $product_id;
		$order_tmp->product_name = $product_name;
		$order_tmp->price = $product_price;
		$order_tmp->save();
	}
}
