<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'delivery_info';

	public $timestamps = true;

	protected $fillable = [
			'user_id', 'product_id', 'product_qty', 'total',
	];
}
