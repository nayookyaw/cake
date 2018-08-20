<?php

namespace App\Http\Controllers\logged;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoggedController extends Controller
{
	public function getAll(Request $inputs)
	{
		$products = DB::table('products')->orderBy('updated_at', 'desc')->get();

		return view('/tmp/loggedProductTmpl', compact('products', $products));
	}
}
