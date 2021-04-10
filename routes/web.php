<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;

//------------load all page -----------//
//
//---User---//

Route::get('/','homeController@index');
Route::get('/shop', 'homeController@shop');
Route::get('/shop-cart', 'homeController@cart');
Route::get('/product-details', 'homeController@product');
Route::get('/contact','homeController@contact');
Route::get('/checkout','homeController@checkout');
Route::get('/blog', 'homeController@blog');
Route::get('/blog-details', 'homeController@blogD');
Route::get('/shop-cart', 'homeController@shopcart');
// find
Route::get('/tim-kiem','homeController@search');
Route::get('findcate','homeController@findcate');
//---


//---admin---//
Route::get('admin','adminController@index');
Route::get('/logoutad','adminController@logout');
Route::get('/admin-qlnv','adminController@nhanvien');
Route::get('/admin-qlkh','adminController@khachhang');
Route::get('/order','admincontroller@order');
Route::get('/addmember','adminController@addmember');
Route::post('/addmem','adminController@addmem');
Route::get('/deletemeber/{id}','adminController@deletemeber');
Route::get('/editmem/{id}','adminController@editmem');
Route::post('/updatemem/{id}','adminController@updatemem');
Route::get('/tim-nv','adminController@timnv');
//----

	//--product
Route::get('/adminproduct','admincontroller@product');
Route::get('/addproduct','adminController@addproduct');
Route::post('/addproduct2','adminController@addproduct2');
Route::get('/deleteproduct/{id}','adminController@deleteproduct');
Route::get('/editproduct/{id}','adminController@editproduct');
Route::post('/updateproduct/{id}','adminController@updateproduct');
Route::post('/tim-sp','adminController@search_product');
//--
	
	//--brand	
Route::get('adminbrand','adminController@brand');
Route::post('/addbrand','adminController@addbrand');
Route::get('deletebrand/{id}','adminController@deletebrand');
Route::get('editbrand/{id}','adminController@goeditbrand');
Route::post('updatebrand/{id}','adminController@editbrand');
Route::post('/tim-brand','adminController@search_brand');
	//--

	//--Order
route::get('orderinfo/{id}','adminController@orderinfo');	
	//--

    //--category
Route::get('/admintype','adminController@type');
Route::get('/editcate/{id}','adminController@update');
Route::post('/updatecate/{id}','admincontroller@edit');
Route::post('/admin-addcategory','adminController@addcategory');
Route::get('/admindeletecate/{id}','adminController@admindeletecate');
Route::post('/tim-loai','adminController@search_loai');

	//--
//-----------------------------------
//
//
// --------------CART-----------//
Route::get('/AddCart/{id}','CartController@AddCart');

Route::get('/DeleteItem/{id}','CartController@DeleteItem');

Route::get('/shop-cart','CartController@ViewCart');
Route::get('/DeleteListItem/{id}','CartController@DeleteListItem');


// -- hóa đơn -- //
Route::get('/thanhtoan','billController@SaveBill');

//-----

//--------------Login------------//
//--User--//

Route::get('/login','homeController@login');
Route::get('/logout','homeController@logout');//logout
Route::get('/register','homeController@register');//logout
Route::post('/checklogin','loginController@login');
Route::post('/checkregister','registerController@register');



// -- admin -- //

Route::get('/adlogin','adminController@ADlogin');
Route::post('/checkloginad','adminController@checklogin');


//--Bill--//
Route::get('/bill', 'homeController@viewBill');


//--Mail--//
Route::get('send-mail',[mailController::class,'sendMail']);