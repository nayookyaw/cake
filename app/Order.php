<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';

	public $timestamps = true;

	protected $fillable = [
			'user_id', 'product_id', 'product_qty', 'total',
	];
}
