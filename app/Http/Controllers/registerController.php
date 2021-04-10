<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
session_start();
class registerController extends Controller
{
    public function register(Request $re)
    {
 
    	if($re->username== null|| $re->password == null|| $re->name== null|| $re->email== null||$re->date== null||$re->phone == null)
    	{
    		session::put("regitermessage","Vui lòng nhập đầy đủ thông tin !");
    		return Redirect::to('/register');
    	}
    	else
    	{
    		$username=$re->username;
	    	$password=md5($re->password);
	    	$name=$re->name;
	    	$email=$re->email;
	    	$date=$re->date;
	    	$phone=$re->phone;
	    	$id = "".strlen($username).substr($phone,0,2).rand(0,100);
	    	DB::insert("insert into khachhang (khMa,khTen,khSdt,khNgaysinh,khTaikhoan,khMatkhau,khQuyen,email) values ('$id', '$name','$phone','$date','$username','$password',0,'$email')");
	    	session::put("username",$username);
	    	return view('userlogin');
    	}
    	
    }
}
