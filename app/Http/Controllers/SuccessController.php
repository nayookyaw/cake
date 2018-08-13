<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Log;

class SuccessController extends Controller
{
	public function __construct()
	{
			$this->middleware('guest')->except('logout');
	}
    public function index(Request $inputs)
		{
			log::info(Auth::user());
		}
}
