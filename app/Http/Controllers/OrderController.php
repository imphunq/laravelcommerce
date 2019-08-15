<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\order;
class OrderController extends Controller
{
    public function getDanhSach()
    {
        $order = order::all();
    	return view('admin.order.danhsach',['order'=>$order]);
    }

    public function getXoa($id)
    {
        $order = size::find($id);
        $order->delete();

        return redirect('admin/order/danhsach');
    }

    public function update($id)
    {
        $order = order::find($id);
        $order->status = 1;
        $order->save();

        return redirect('admin/order/danhsach');
    }
}
