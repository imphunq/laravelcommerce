<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'category';
	public $timestamps = false;
    public function product()
    {
    	return $this->hasMany('App\product','cat_id','id'); // cat_id khoa ngoai cua product, id la khoa chinh cua category
    } 
}
