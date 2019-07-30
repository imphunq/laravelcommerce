<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
// use App\category;
class CategoryController extends Controller
{
    //
    public function getDanhSach()
    {
        $cat = category::all();
    	return view('admin.category.danhsach',['cat'=>$cat]);
    }

    public function getThem()
    {
    	return view('admin.category.them');
    }

    public function postThem(CategoryRequest $request)
    {
        $fileName = $request->file('images')->getClientOriginalName(); // lấy tên hình
        $cate = new category;
        $cate->name = $request->name;
        $cate->title = $request->title;
        $cate->images = $fileName;
        $cate->dateCreate = $request->dateCreate;
        $cate->status = $request->status;
        // $filethu = resource_path('upload/');
        $request->file('images')->move('resources/upload/',$fileName);
        $cate->save();
        return redirect('admin/category/danhsach');
    }

    public function getSua($id)
    {
        $theloai = category::find($id);
    	return view('admin.category.sua',['cat'=>$theloai]);
    }

    public function postSua(Request $request,$id)
    {
        $theloai = category::find($id);
        $this->validate($request,
        [
            'name' => 'required|unique:category,name'
        ],
        [
            'name.required' => 'Chưa nhập tên thể loại',
            'name.unique' => 'Tên đã tồn tại'
        ]);
        $fileName = $request->file('images')->getClientOriginalName();
        $theloai->name = $request->name;
        $theloai->title = $request->title;
        $theloai->status = $request->status;
        $theloai->dateCreate = $request->dateCreate;

        $request->file('images')->move('resources/upload/',$fileName);
        unlink("resources/upload/".$theloai->images);
        $theloai->images = $fileName;
        $theloai->save();
        return redirect('admin/category/danhsach');
    }

    public function getXoa($id)
    {
        $theloai = category::find($id);
        $theloai->delete();

        return redirect('admin/category/danhsach');
    }
}
