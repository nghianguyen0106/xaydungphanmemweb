<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
    public function Index()
    {
        $product = DB::table('sanpham')->get();
        return view('index',compact('sanpham'));
    }   
    public function AddCart(Request $req, $id)
    {
        $product = DB::table('sanpham')->where('spMa',$id)->first();
        if($product!=null){  
                 $oldCart = session('Cart') ? session('Cart') : null;
                 $newCart = new Cart($oldCart);
                 $newCart->AddCart($product, $id);
                 $req->session()->put('Cart', $newCart);
               }
        //dd(session('Cart'));
        return view('cart_bag',compact('newCart'));
    }

     public function DeleteItem(Request $req, $id)
    {  
                 $oldCart = session('Cart') ? session('Cart') : null;
                 $newCart = new Cart($oldCart);
                 $newCart->DeleteItem($id);

                if(Count($newCart->products)>0)
                {
                      $req->session()->put('Cart', $newCart);
                }
                else
                {
                    $req->session()->forget('Cart');
                }
                 return view('cart_bag',compact('newCart'));

    }

    public function ViewCart()
    {
         return view('shop-cart');
    }
    public function DeleteListItem(Request $req, $id)
    {  
                 $oldCart = session('Cart') ? session('Cart') : null;
                 $newCart = new Cart($oldCart);
                 $newCart->DeleteItem($id);

                if(Count($newCart->products)>0)
                {
                    $req->session()->put('Cart', $newCart);
                }
                else
                {
                    $req->session()->forget('Cart');
                }
                 return view('view_cart',compact('newCart'));
                
    }

    
}
