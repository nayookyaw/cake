<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class AdminDeliveryController extends Controller
{
    public function getAllDelivery()
    {
        $delivery_info = DB::table('delivery_info')->leftjoin('users', 'delivery_info.user_id', '=', 'users.id')
                                                   ->select('delivery_info.user_id as user_id', 'delivery_info.updated_at as updated_at', 'users.name as user_name')
                                                   ->get();
        $delivery_info = $delivery_info->unique('user_id');
        $delivery_info->values()->all();

        return view('/tmp/adminDeliveryTmpl', compact('delivery_info', $delivery_info));
    }

    public function getDeliveryDetail($user_id)
    {
        $delivery_info = DB::table('delivery_info')
                                ->leftjoin('products', 'delivery_info.product_id', '=', 'products.id')
								->orderBy('delivery_info.updated_at', 'desc')
								->where('delivery_info.user_id', '=', $user_id)
								->select('delivery_info.*', 'products.name as product_name')
                                ->get();

        $user = DB::table('users')
                    ->where('users.id', '=', $user_id)
                    ->select('name')
                    ->first();

        $total = DB::table('delivery_info')
                    ->where('user_id', '=', $user_id)
                    ->sum('total');

        return view('/admin/adminDeliveryDetail', compact('delivery_info', $delivery_info , 'user', $user, 'user_id', $user_id, 'total', $total));
    }
}
