<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class AdminUserController extends Controller
{
	public function getAllUser()
	{
		$users = DB::table('users')->orderBy('updated_at', 'desc')->where('users.role', '=', 'user')->get();

		return view('/admin/adminUsers', compact('users', $users));
	}
}
