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
}
