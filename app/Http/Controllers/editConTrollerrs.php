<?php
/**
 * Created by PhpStorm.
 * User: Tung-Thanh
 * Date: 7/16/2018
 * Time: 12:49 AM
 */

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class editConTrollerrs extends BaseController
{
function news($name1){
    $name3=$name1;
    return view('btvn',['name2'=>$name3]);
}
}