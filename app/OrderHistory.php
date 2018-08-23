<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
	protected $table = 'order_histories';

	public $timestamps = true;

	protected $fillable = [
			'user_id', 'product_id', 'product_qty', 'total',
	];
}
