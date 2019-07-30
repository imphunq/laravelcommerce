<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    //
    protected $table = 'size';
	public $timestamps = false;
    public function product()
    {
    	return $this->belongsTo('App\product','size_id','id');
    }
}
