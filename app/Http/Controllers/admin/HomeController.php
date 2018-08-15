<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use DB;

class HomeController extends Controller
{
	public function summary()
	{
		$users = DB::table('users')->get();
		log::info($users);
	}
}
