<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\order_detail;
class OrderDetailController extends Controller
{
    public function getDanhSach()
    {
        $order = order_detail::all();
    	return view('admin.order_detail.danhsach',['order'=>$order]);
    }
}
