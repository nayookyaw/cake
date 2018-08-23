<?php

namespace App\Http\Controllers\cake;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class CakeHomeController extends Controller
{
	public function getNewProduct()
	{
		$products = DB::table('products')
				->orderBy('updated_at', 'desc')
				->take('5')
				->get();

		return view('/tmp/cakeNewProductTmpl', compact('products', $products));
	}
}
