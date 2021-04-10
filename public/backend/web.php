<?php

use Illuminate\Support\Facades\Route;

//------------load all page -----------//
//---User---//
Route::get('/','homeController@index');
Route::get('/shop', 'homeController@shop');
Route::get('/shop-cart', 'homeController@cart');
Route::get('/product-details', 'homeController@product');
Route::get('/contact', 'homeController@contact');
Route::get('/checkout', 'homeController@checkout');
Route::get('/blog', 'homeController@blog');
Route::get('/blog-details', 'homeController@blogD');
Route::get('/shop-cart', 'homeController@shopcart');

//---admin---//
Route::get('admin','adminController@index');



// --------------CART-----------//
Route::get('/addtocart/{id}','cartController@add');







//--------------Login------------//
//--User--//

Route::get('/login','homeController@login');
Route::get('/logout','homeController@logout');//logout
Route::get('/register','homeController@register');//logout

Route::post('/checklogin','loginController@login');
Route::post('/checkregister','registerController@register');
// -- admin -- //

Route::get('/login','loginController@ADlogin');