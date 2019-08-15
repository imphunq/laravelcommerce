<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\product;
use DB;
use Mail;
use App\User;
use Hash;
use Session;
use Auth;
 // @inject('countries', 'App\Http\Utilities\Country');
class HomeController extends Controller
{
    public function trangchu()
    {
      if(isset($_GET["option_id"])){
        $id = $_GET["option_id"];
        if($id==1){
            $product = DB::table('product')->orderBy('dateCreate','desc')->paginate(6);
        }else if($id==2) {
            $product = DB::table('product')->orderBy('dateCreate','asc')->paginate(6);;
        }else if($id==4) {
            $product = DB::table('product')->orderBy('price','desc')->paginate(6);
        }else {
            $product = DB::table('product')->orderBy('price','asc')->paginate(6);
        }
        return view('pages.ajaxcontent', compact('product'));
      }else{
        $product = DB::table('product')->orderBy('dateCreate','desc')->paginate(6);
        return view('pages.content', compact('product'));
      }
    }

    public function blog(){
        return view('pages.blog');

    }
    public function contact(){
        return view('pages.contact');

    }
    public function checkout(){

        return view('pages.checkout');

    }
    public function detail(){
        return view('pages.detail');

    }

    public function productCate($id)
    {
        $product = DB::table('product')->select('id','nameProduct','images','cat_id','price','size_id','color_id','amount','sale_of','description')->where('cat_id',$id)->paginate(3);
        return view('pages.filter',compact('product'));
    }

    public function chitietsanpham($id)
    {
        $product_detail = DB::table('product')->where('id',$id)->first();
        return view('pages.detail',compact('product_detail'));
    }

    public function get_lienhe()
    {
        return view('pages.contact');
    }

    public function post_lienhe(Request $request)
    {
        $mail = $request->email;
        $data = ['email'=>$request->email,'tinnhan'=>$request->message];
        Mail::send('pages.blanks',$data,function($msg) use ($mail){
            $msg->from($mail,'KhachHang');
            $msg->to('phube232@gmail.com','Chu')->subject('Thu swift mailer');
        });
        echo "<script>
            alert('Cám ơn tin nhắn của bạn, tôi sẽ liên hệ lại');
            window.location.href = '".url('/')."'
        </script>";
    }

    public function postcheckout(Request $request)
    {
        $mail = $request->email_address;
        $transport = $request->transport;
        $vanchuyen = DB::table('transport')->select('id','name')->get();
        foreach ($vanchuyen as  $vc) {
            if($transport==$vc->id)
                $cach = $vc->name;
        }
        $data = ['name'=>$request->name,'phone'=>$request->phone_number,'address'=>$request->street_address,'transport'=>$cach,'mail'=>$mail];
        Mail::send('pages.bill',$data,function($msg) use($mail){
            $msg->from($mail,'KhachHang');
            $msg->to('phube232@gmail.com','Chu')->subject('ĐƠN MUA HÀNG');
        });
        echo "<script>
            alert('Cám ơn bạn đã mua hàng');
            window.location.href = '".url('/')."'
        </script>";
    }

    public function muahang(Request $request,$id)
    {
        $color = $request->selectcolor;
        $size = $request->selectsize;
        $quantity = $request->quantity;
        $tableColor = DB::table('color')->select('id','name','code')->get();
        $tableSize = DB::table('size')->select('id','name')->get();
        // print_r($tableColor); exit();
        $mau = '';
        foreach($tableColor as $cl)
            if($color==$cl->id)
                $mau= $cl->name;
        foreach($tableSize as $s)
            if($size==$s->id)
                $co = $s->name;       
        $product_buy = DB::table('product')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->nameProduct,'qty'=>$quantity,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->images,'color'=>$mau,'size'=>$co)));
        $content = Cart::content();

        return redirect()->back();
    }
    public function xoasanpham($id)
    {
        Cart::remove($id);
        return redirect('/cart');
    }

    // Dang nhap
    public function dangnhap()
    {
        return view('pages.login');
    }
    public function dangky()
    {
        return view('pages.dangky');
    }

    public function postdangky(Request $request)
    {
        $request->validate(
        [
            'email'=>'required|email|unique:user,email',
            'userName'=>'required|min:6|unique:user,username',
            'fullName'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Please Enter Your Email',
            'email.email'=>'Syntax Email Error',
            'email.unique'=>'Email was used',
            'userName.required'=>'Please Enter Your username',
            'userName.min'=>'Password ngắn',
            'userName.unique'=>'UserName đã được sử dụng',
            'fullName.required'=>'Please Enter Fullname',
            'password.required'=>'Please Enter Password'
        ]);
        $user = new User();
        $user->username = $request->userName;
        $user->password = Hash::make($request->password);
        $user->fullname = $request->fullName;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->address = $request->address;
        $user->status = $request->rdoStatus;
        // var_dump($request);exit();
        $user->save();
        return redirect()->back()->with('thanhcong','Create Account Successfully');
    }

    public function postdangnhap(Request $request)
    {
        $this->validate($request,
        [
            'password'=>'required',
            'username'=>'required'
        ],
        [
            'username.required'=>'Please Enter Username',
            'password.required'=>'Please Enter Password'
        ]);
        $mang = array('username'=>$request->username,'password'=>$request->password);
        if(Auth::attempt($mang))
        {
            return redirect('/')->with(['flag'=>'success','thongbao'=>'Đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger','thongbao'=>'Đăng nhập thất bại']);
        }
    }
    public function dangxuat()
    {
        Auth::logout();
        return redirect('');
    }

    public function search(Request $request)
    {
        $product = DB::table('product')->where('nameProduct','like','%'.$request->search.'%')->get();
        return view('pages.search',compact('product'));
    }

    public function getDetailCart()
    {
        if(isset($_GET["id"])&&isset($_GET["quantity"]))
        {
            $id = $_GET["id"];
            $qty = $_GET["quantity"];
            Cart::update($id, $qty);
        }
        return view('pages.cart');
    }
}
