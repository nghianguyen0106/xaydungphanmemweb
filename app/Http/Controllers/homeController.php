<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
class homeController extends Controller
{
    public function index()
    {
         $db = DB::table('sanpham')->get();
    	return view('home',compact('db'));
    }

    public function shop()
    {
        $db = DB::table('sanpham')->select('spMa','spTen','spGia','spHinh')->get();
        $l =DB::table('loai')->get();
    	return view('shop')->with('db',$db)->with('l',$l);
    }

    public function cart()
    {
    	return view('shop-cart');
    }

    public function product()
    {
    	return view('product-detail');
    }

    public function contact()
    {
    	return view('contact');
    }

    public function checkout()
    {
    	return view('checkout');
    }

    public function blog()
    {
    	return view('blog');
    }

    public function blogD()
    {
    	return view('blog-detail');
    }
    public function login()
    {
        return view('userlogin');
    }
    public function logout()
    {
        Session::forget('username'); 
        Session::forget('khMa');
        Session::forget('khMail'); 
        Session::forget('Cart');   
        return view('userlogin');   
    }
    public function register()
    {
        return view('register');   
    }
    public function shopcart()
    {
        return view('shop-cart');   
    }
    // Search -----------------
    public function search(Request $request)
    {
        $sp=DB::table('sanpham')
        ->where('spTen','like','%'.$request->search_text.'%')->get();
         $l =DB::table('loai')->get();
       return view('shop')->with('db',$sp)->with('l',$l);
    }
    public function findcate(Request $re)
    {

        $sp=DB::table('sanpham')->where('loaiMa',$re->loai)->get();
        $l =DB::table('loai')->get();
        return view('shop')->with('db',$sp)->with('l',$l);
    }
    public function viewBill()
  {

    return view('bill');
  }
}
