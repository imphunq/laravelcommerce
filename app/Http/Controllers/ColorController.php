<?php

namespace App\Http\Controllers;
use App\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public function getDanhSach()
    {
        $color = color::all();
    	return view('admin.color.danhsach',['color'=>$color]);
    }

    public function getSua($id)
    {
        $color = color::find($id);
    	return view('admin.color.sua',['color'=>$color]);
    }

    public function postSua(Request $request,$id)
    {
        $color = color::find($id);
        $color->name=  $request->name;
        $color->code = $request->code;
        $color->dateCreate = $request->dateCreate;
        $color->status = $request->rdoStatus;

        $color->save();
        return redirect('admin/color/danhsach');
    }

    public function getThem()
    {
    	return view('admin.color.them');
    }

    public function postThem(Request $request)
    {
        $color = new color;
        $color->name = $request->name;
        $color->code = $request->code;
        $color->dateCreate = $request->dateCreate;
        $color->status = $request->rdoStatus;

        $color->save();
        return redirect('admin/color/danhsach');
    }

    public function getXoa($id)
    {
        $color=color::find($id);
        $color->delete();

        return redirect('admin/color/danhsach');
    }
}
