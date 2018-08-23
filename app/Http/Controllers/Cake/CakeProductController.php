<?php

namespace App\Http\Controllers\Cake;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class CakeProductController extends Controller
{
	public function getAll(Request $inputs)
	{
		$products = DB::table('products')->orderBy('updated_at', 'desc')->get();

		return view('/tmp/cakeProductTmpl', compact('products', $products));
	}

	public function searchAll(Request $inputs)
	{
		$search = $inputs->get('search');

		$products = DB::table('products')->orderBy('updated_at', 'desc')
										->where('name','LIKE','%'.$search."%")
										->get();

		return view('/tmp/cakeProductTmpl', compact('products', $products));
	}

	public function searchPrice(Request $inputs)
	{
		$max = $inputs->get('max');
		$min = $inputs->get('min');

		$products = DB::table('products')->orderBy('updated_at', 'desc')
										->whereBetween('price', array($min,$max))
										->get();

		return view('/tmp/cakeProductTmpl', compact('products', $products));
	}
}
