<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\size;
class SizeController extends Controller
{
    //
    public function getDanhSach()
    {
        $size = size::all();
    	return view('admin.size.danhsach',['size'=>$size]);
    }

    public function getSua($id)
    {
        $size = size::find($id);
        return view('admin.size.sua',['size'=>$size]);
    }

    public function postSua(Request $request,$id)
    {
        $size = size::find($id);
        $size->name = $request->name;
        $size->status = $request->rdoStatus;
        $size->dateCreate = $request->dateCreate;
        // dd(($size));
        $size->save();
        return redirect('admin/size/danhsach');
    }

    public function getThem()
    {
    	return view('admin.size.them');
    }

    public function postThem(Request $request)
    {
        $size = new size;
        $size->name = $request->name;
        $size->status = $request->rdoStatus;
        $size->dateCreate = $request->dateCreate;

        $size->save();
        return redirect('admin/size/danhsach');
    }

    public function getXoa($id)
    {
        $size = size::find($id);
        $size->delete();

        return redirect('admin/size/danhsach');
    }
}
