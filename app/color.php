<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    //
    protected $table = 'color';
	public $timestamps = false;
    public function product()
    {
    	return $this->belongsTo('App\product','color_id','id');
    }
}
