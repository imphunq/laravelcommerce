<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'product';
    public $timestamps = false;

    public function category()
    {
    	return $this->belongsTo('App\category','cat_id','id'); // id cua bang product
    }

    public function size()
    {
    	return $this->hasMany('App\size','size_id','id');
    }

    public function color()
    {
    	return $this->hasMany('App\color','color_id','id');
    }

    public function order_detail()
    {
        return $this->hasMany('App\order_detail', 'product_id', 'id');
    }

 
}
