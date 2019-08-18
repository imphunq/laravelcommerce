<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    protected $table = 'order_detail';
	public $timestamps = false;

	public function order()
	{
		return $this->belongsTo('App\User', 'order_id', 'id');
	}

	public function product()
	{
		return $this->belongsTo('App\product', 'product_id', 'id');
	}
}
