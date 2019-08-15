<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\color;
use App\size;
use DB;
class ProductController extends Controller
{
    //
    public function getDanhSach()
    {
        $product = DB::table('product')
            ->join('category', 'category.id', '=', 'product.cat_id')
            ->join('color', 'color.id', '=', 'product.color_id')
            ->join('size', 'size.id', '=', 'product.size_id')
            ->select('product.*', 'category.id', 'color.id','size.id','product.id')
            ->get();
            // dd($product);
        return view('admin.product.danhsach',['pro'=>$product]);
    }

    public function getSua($id)
    {
        $product = product::find($id);
    	return view('admin.product.sua',['product'=>$product]);
    }

    public function postSua(Request $request,$id)
    {
        $product = product::find($id);
        
        $fileName = $request->file('images')->getClientOriginalName();
        $product->nameProduct = $request->nameProduct;
        // $product->images = $fileName;
        $product->cat_id = $request->category;
        $product->price = $request->price;
        $product->size_id = $request->size;
        $product->color_id = $request->color;
        $product->amount = $request->amount;
        $product->sale_of = $request->sale_of;
        $product->description = $request->description;
        $product->status = $request->rdoStatus;
        $product->dateCreate = $request->dateCreate;
        $request->file('images')->move('resources/upload/',$fileName);
        unlink('resources/upload/'.$product->images);
        $product->images = $fileName;

        $product->save();
        return redirect('admin/product/danhsach');
    }

    public function getThem()
    {
    	return view('admin.product.them');
    }

    public function postThem(Request $request)
    {
        $fileName = $request->file('images')->getClientOriginalName();
        $product = new product;
        $product->nameProduct = $request->nameProduct;
        $product->images = $fileName;
        $product->cat_id = $request->category;
        $product->price = $request->price;
        $product->size_id = $request->size;
        $product->color_id = $request->color;
        $product->amount = $request->amount;
        $product->sale_of = $request->sale_of;
        $product->description = $request->description;
        $product->status = $request->rdoStatus;
        $product->dateCreate = $request->dateCreate;
        $request->file('images')->move('resources/upload/',$fileName);
        // dd($product);
        $product->save();
        return redirect('admin/product/danhsach');
    }

    public function getXoa($id)
    {
        $product = product::find($id);
        $product->delete();

        return redirect('admin/product/danhsach');
    }
}
