<?php
/**
 * Created by PhpStorm.
 * User: Tung-Thanh
 * Date: 7/14/2018
 * Time: 12:34 AM
 */

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class homeControllers extends BaseController
{
 function new($tung){
     return "lanb 2 nhé".$tung;
 }

}