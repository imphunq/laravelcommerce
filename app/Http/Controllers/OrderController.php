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

    public function getSua($id)
    {
        $order = order::find($id);
    	return view('admin.order.sua',['order'=>$order]);
    }

    public function postSua(Request $request,$id)
    {
        $order = order::find($id);
        $user = App\User::with('user')->get();
        $order->name = $request->name;
        $order->total = $request->rdoStatus;
        $order->dateCreate = $request->dateCreate;
        // dd(($size));
        $order->save();
        return redirect('admin/order/danhsach');
    }

    public function getThem()
    {
    	return view('admin.order.them');
    }

    public function postThem(Request $request)
    {
        $order = new order;
        $order->name = $request->name;
        $order->status = $request->rdoStatus;
        $order->dateCreate = $request->dateCreate;

        $order->save();
        return redirect('admin/order/danhsach');
    }

    public function getXoa($id)
    {
        $order = size::find($id);
        $order->delete();

        return redirect('admin/order/danhsach');
    }
}
