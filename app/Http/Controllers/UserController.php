<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    // public function content()
    // {
    //     return view('admin.pages.content');
    // }

    // public function table()
    // {
    //     return view('admin.pages.table');
    // }

    // public function form()
    // {
    //     return view('admin.pages.form');
    // }

    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getSua($id)
    {
        $user = User::find($id);;
        return view('admin.user.sua',['user'=>$user]);
    }

    public function postSua(Request $request,$id)
    {
        $user = User::find($id);
        $user->username = $request->userName;
        $user->fullname = $request->fullName;
        $user->phone = $request->phone;
        // $user->email = $request->email;
        $user->gender =$request->gender;
        $user->birthday = $request->birthday;
        $user->address  =$request->address;
        $user->status = $request->rdoStatus;
        if(isset($request->changePassword))
        {
            $user->password = bcrypt($request->password);
        }
        // dd($user);
        $user->save();
        return redirect('admin/user/danhsach');
    }

    public function getThem()
    {
        return view('admin.user.them');
    }

    public function postThem(UserRequest $request)
    {
        $user = new User;
        $user->username = $request->userName;
        $user->password = Hash::make($request->password);
        $user->fullname = $request->fullName;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->gender =$request->gender;
        $user->birthday = $request->birthday;
        $user->address  =$request->address;
        $user->status = $request->rdoStatus;

        $user->save();
        return redirect('admin/user/danhsach');
    }

    public function getXoa($id)
    {
        $user_current_login = Auth::user()->id;
        $user = User::find($id);
        if($user->status==1)
        {
          return redirect('admin/user/danhsach');
        }
        else
        {
          $user->delete($id);
          return redirect('admin/user/danhsach');
        }
    }

    public function getdangnhapAdmin()
    {
      return view('admin.login');
    }

    public function postdangnhapAdmin(Request $request)
    {
      $this->validate($request,
      [
          'username' => 'required',
          'password' => 'required'
      ],
      [
          'username.required' => 'Please Enter userName',
          'password.required' => 'Please Enter password '
      ]);
      if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
      {
          return redirect('admin/category/danhsach');
      }
      else
      {
          return redirect('admin/dangnhap');
      }
    }

    public function getDangXuatAdmin()
    {
      Auth::logout();
      return redirect('admin/dangnhap');
    }
}
