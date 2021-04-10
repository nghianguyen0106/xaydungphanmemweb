<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class loginController extends Controller
{
    public function login(Request $re)
    {
    	$username=$re->username;
    	$password=md5($re->password);
    	$result=DB::table('khachhang')->where('khTaikhoan',$username)->where('khMatkhau',$password)->first();
      
    	if($result)
    	{
              $x= DB::table('khachhang')->select('khMa','khTen','email')->where('khTaikhoan',$username)->get();
                foreach($x as $v)
                {
                    $y=$v->khMa;
                    $e=$v->khTen;
                    $m=$v->email;
                }
    		session::put("username",$username);
            session::put('khMa',$y);
            session::put('khTen',$e);
            session::put('khMail',$m);
    		return Redirect::to('/');
    	}
    	else
    	{
	    	session::put("loginmessage","Wrong username or password!");
    		return view('userlogin');
    	}
    }
}
