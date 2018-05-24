<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\admin;
use App\user1;

class loginController extends Controller
{
   public function login(Request $request)
   {
    $data1 = admin::where('username',$request->username)->where('password',$request->password)->get();
    $data2 = user1::where('username',$request->username)->where('password',$request->password)->get();


    if(count ($data1)>0)
    {
        Auth::guard('admin')->LoginUsingId($data1[0]['id']);
        return redirect('/home-admin');
    }
    else if(count ($data2)>0)
    {
        Auth::guard('user1')->LoginUsingId($data2[0]['id']);
        return redirect('/home-user');
    }
    else
    {
        return "Gagal Login";
    }
   }
   public function logout()
   {
    if(Auth::guard('admin')->check())
    {
        Auth::guard('admin')->logout();
    }
    else if(Auth::guard('user1')->check())
    {
        Auth::guard('user1')->logout();
    }
    return redirect('/login');
   }
}
