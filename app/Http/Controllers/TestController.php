<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Log;

class TestController extends Controller
{
	public function __construct()
	{
			$this->middleware('guest')->except('logout');
	}
	public function index(Request $inputs)
	{
		$email = $inputs->get('username');
		$password = $inputs->get('password');

		$users = DB::table('users')->get();

		if (!$users) { return response()->json(['error' => 'There is no data'], 404); }

		$loginFlag = false;
		foreach($users as $user){
			if ($email == $user->email && $password == $user->password)
			{
				$loginFlag = true;
			}
		}
		if (!$loginFlag) { return response()->json(['error' => 'Username or Password is invalid'], 401); }

		log::info(Auth::user());
		return response()->json([
			'success' => "SUCCESS"
		]);
	}
}
