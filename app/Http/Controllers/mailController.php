<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use DB;
class mailController extends Controller
{
    public function sendMail()
    {

    	$details = [
    		'title'=>'Đặt hàng thành công!',
    		'username'=>Session::get('username'),
    		'totalQuanty'=>Session::get('Cart')->totalQuanty,
    		'totalPrice'=>number_format(Session::get('Cart')->totalPrice),
    		'hdNgaylap'=>Session::get('hdNgaylap'),
    		'hdMa'=>Session::get('hdMa'),
    		'spTen'=>Session::get('spTen')

    	];
    	Mail::to( Session::get('khMail'))->send(new email($details));
    	Session::forget('Cart');
    	Session::forget('totalQuanty');
        Session::forget('totalPrice');
        Session::forget('hdNgaylap');
    	Session::forget('hdMa');
    	return view('bill');
    }
}
