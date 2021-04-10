<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();
class billController extends Controller
{
  public function SaveBill(Request $req)
    {
      if(Session::get('username')== null)
      {
        Session::put('requireLogin',' Vui lòng đăng nhập trước khi thanh toán !');
        return Redirect::to('login');
      }
      else
      {
       $data['khMa'] = Session::get('khMa');
       $data['hdTongtien'] = Session::get('Cart')->totalPrice;
       $data['hdTongsp'] = Session::get('Cart')->totalQuanty;
       $rand=rand(0,100);
       $data['hdMa'] = $rand;
       $data['hdNgaylap']= date("Y/m/d"); 
       DB::table('hoadon')->insert($data);
      
        
       $ex = array();
       $ex = Session::get('Cart');
      Session::put('hdNgaylap',$data['hdNgaylap']);
      Session::put('hdMa',$data['hdMa']);
      foreach ($ex->products as $k => $v)
        {
          $dataex['hdMa']=$data['hdMa'];
          $dataex['cthdSoluong']=$v['quanty'];
          $dataex['cthdGia']=$v['price'];
          $dataex['spMa']=$v['productInfo']->spMa;
          DB::table('chitiethoadon')->insert($dataex);
        }
          return Redirect::to('send-mail');
    }
  }
}