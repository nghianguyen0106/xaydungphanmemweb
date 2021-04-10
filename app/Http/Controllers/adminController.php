<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Validations\Validation;
session_start();
class adminController extends Controller
{
//---- --- Go to ------------//
    public function index()
    {
    	if(session::has('adminname'))
    	{
    		return view('admin.dashboard');
    	}
    	else
    	{
    			return Redirect::to('adlogin');
    	}
    }
   
    public function type()
    {
    	if(session::has('adminname'))
    	{
    		 $db =DB::table('loai')->get();
            return view('admin.category')->with('db',$db);
    	}
    	else
    	{
    		session::put('loginrequire','Login first !');
    			return Redirect::to('adlogin');
    	}
    }
   public function brand()
    {
    	if(session::has('adminname'))
    	{
    		$db=DB::table('thuonghieu')->get();
            return view('admin.brand')->with('db',$db);
    	}
    	else
    	{
    		session::put('loginrequire','Login first !');
    			return Redirect::to('adlogin');
    	}
    }
    public function product()
    {
        if(session::has('adminname'))
        {
            $loai=DB::table('loai')->get();
            $th=DB::table('thuonghieu')->get();
           $db = DB::table('sanpham')->paginate(10);
      
            return view('admin.product')->with('db',$db)->with('loai',$loai)->with('th',$th);
        }
        else
        {
            session::put('loginrequire','Login first !');
                return Redirect::to('adlogin');
        }
    }

     public function logout()
    {
    	session::forget('adminname');
    	return Redirect::to('adlogin');
    }
    public function ADlogin()
    {
    	return view('admin.login');
    }
    public function nhanvien()
    {
        $data=DB::table('khachhang')->where('khQuyen','>',0)->get();
        return view('admin.nhanvien')->with('db',$data);
    }public function khachhang()
    {
          $data=DB::table('khachhang')->where('khQuyen','<',1)->get();
        return view('admin.khachhang')->with('db',$data);
    }
   public function order()
   {
     $data = DB::table('hoadon')->get();
     return view('admin.order')->with('db',$data);
   }
    //-- end go to --//

    //---------- PROCESS --------//
    //
    //
    //
    //---Member manager
    public function addmember()
    {
        return view('admin.addmember');
    }
    public function addmem(Request $re)
    {
    if($re->username== null|| $re->password == null|| $re->name== null|| $re->email== null||$re->date== null||$re->phone == null)
        {
            session::put("message","Vui lòng nhập đầy đủ thông tin !");
            
        }
        else
        {
            if($re->quyen!="")
            {
                $username=$re->username;
                $password=md5($re->password);
                $name=$re->name;
                $email=$re->email;
                $date=$re->date;
                $phone=$re->phone;
              
                    $quyen=$re->quyen;    
                
                
                $id = "".strlen($username).substr($phone,0,2).rand(0,100);
                DB::insert("insert into khachhang (khMa,khTen,khSdt,khNgaysinh,khTaikhoan,khMatkhau,khQuyen,email) values ('$id', '$name','$phone','$date','$username','$password','$quyen','$email')");
                session::put("username",$username);
                return Redirect::to('admin-qlkh');
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
                return redirect()->back();
            }
        }
    }
    public function deletemeber(Request $re)
    {
        DB::table('khachhang')->where('khMa',$re->id)->delete();
        return Redirect()->back();
    }
    public function editmem(Request $re)
    {
        $data= DB::table('khachhang')->where('khMa',$re->id)->get();
        return view('admin.editmem')->with('db',$data);
    }
    public function updatemem(Request $re)
    {
     if($re->username== null|| $re->password == null|| $re->name== null|| $re->email== null||$re->date== null||$re->phone == null)
        {
            session::put("message","Vui lòng nhập đầy đủ thông tin !");
            return redirect()->back();
        }
        else
        {
            if($re->quyen!="")
            {
                $data['khTaikhoan']=$re->username;
                $data['khMatkhau']=md5($re->password);
                $data['khTen']=$re->name;
                $data['email']=$re->email;
                $data['khNgaysinh']=$re->date;
                $data['khSdt']=$re->phone;
                $data['khQuyen']=$re->quyen;
                DB::table('khachhang')->where('khMa',$re->id)->update($data);
                return Redirect('admin-qlkh');
            }
            else
            {
                $$data['khTaikhoan']=$re->username;
                $data['khMatkhau']=md5($re->password);
                $data['khTen']=$re->name;
                $data['email']=$re->email;
                $data['khNgaysinh']=$re->date;
                $data['khSdt']=$re->phone;
                DB::table('khachhang')->where('khMa',$re->id)->update($data);
                return redirect()->back() ;
            }
           
        }
}

public function timnv(Request $re)
{
    $data= DB::table('khachhang')->where('khTen','like','%'.$re->tennv.'%')->where('khQuyen','>',1)->get();
    return view('admin.nhanvien')->with('db',$data);
}


// ---------
// -- order
public function orderinfo(Request $re)
{
    $data= DB::table('hoadon')->where('hdMa',$re->id)->get();
    return view('admin.orderinfo')->with('db',$data);
}


//--
// ----product     
public function addproduct()
{
    $loai = DB::table('loai')->select('loaiMa','loaiTen')->get();
    $th = DB::table('thuonghieu')->select('thMa','thTen')->get()    ;
    return view('admin.addproduct')->with('th',$th)->with('loai',$loai);
}
 public function addproduct2(Request $re)
 {
    $re->validate([
        'name'=>'required',
        'price'=>'required',
        'bh'=>'required',
        'img'=>'required',
        'status'=>'required',
    ],
    [
        'name.required'=>'Tên sản phẩm không được trống !',
        'price.required'=>'Giá Không được trống !',
        'bh.required'=>'Hạn bảo hành không được trống !',
        'img.required'=>'Hình không được trống !',
        'status.required'=>'Tình trạng không được để trống !',
    ]);
    if($re->hasFile('img'))
    {
        $data['spTen'] =$re->name;
        $data['spGia']=$re->price;
        $data['spBaohanh']=$re->bh;
        $data['spHinh']=$re->file('img')->getClientOriginalName();
        $imgextention=$re->file('img')->extension();
        $file=$re->file('img');
        $file->move('public/frontend/img',$data['spHinh']);
        $data['spTinhtrang']=$re->status;
        $data['thMa']=$re->th;
        $data['loaiMa']=$re->loai;
        // create product id
        $rand=rand(0,100);
        $rand1=rand(0,100);
        $rand2=rand(0,100);
        $data['spMa']=''.strlen($data['spTen']).strlen($data['spBaohanh']).strlen($data['spTinhtrang']).$rand.$rand1.$rand2 ;
        //----
        DB::table('sanpham')->insert($data);
        return Redirect::to('adminproduct');

    }
    else
    {
        Session::put('mesaddpro','Sản phẩm phải có file ảnh !');
         return redirect()->back();
    }

 }
 public function deleteproduct(Request $re)
 {
    DB::table('sanpham')->where('spMa',$re->id)->delete();
    return redirect()->back();
 }
 public function editproduct(Request $re)
 {
    $th = DB::table('thuonghieu')->get();
    $loai= DB::table('loai')->get();
    $data= DB::table('sanpham')->where('spMa',$re->id)->get();
    return view('admin.editproduct')->with('data',$data)->with('th',$th)->with('loai',$loai);
 }
 public function updateproduct(Request $re)
 {
    if($re->hasFile('img')==true)
    {
        $data['spTen']=$re->name;
        $data['spGia']=$re->price;
        $data['spBaohanh']=$re->bh;
        $data['spHinh']=$re->file('img')->getClientOriginalName();
            $imgextention=$re->file('img')->extension();
            $file=$re->file('img');
            $file->move('public/frontend/img',$data['spHinh']);
        $data['spTinhtrang']=$re->status;
        $data['thMa']=$re->th;
        $data['loaiMa']=$re->loai;   
        DB::table('sanpham')->where('spMa',$re->id)->update($data);   
        return Redirect::to('adminproduct');
    }
    else
    {
        $data['spTen']=$re->name;
        $data['spGia']=$re->price;
        $data['spBaohanh']=$re->bh;
        $data['spTinhtrang']=$re->status;
        $data['thMa']=$re->th;
        $data['loaiMa']=$re->loai;  
        DB::table('sanpham')->where('spMa',$re->id)->update($data);         
        return Redirect::to('adminproduct');
    }
    
 }


public function search_product(Request $re)
    {
        $db=DB::table('sanpham')->paginate(10);
        if($re->skey == null && $re->th ==null&& $re->loai ==null)
        {
            return Redirect::to('adminproduct');
        }
        if($re->skey != null && $re->th !=null&& $re->loai !=null)
        {
             $db=DB::table('sanpham')->where('spTen','like','%'.$re->skey.'%')->where('thMa',$re->th)->where('loaiMa',$re->loai)->paginate(50);   
        }
        if($re->skey != null && $re->loai !=null)
        {
             $db=DB::table('sanpham')->where('spTen','like','%'.$re->skey.'%')->where('loaiMa',$re->loai)->paginate(50);   
        }
        if($re->skey != null && $re->th !=null)
        {
            $db=DB::table('sanpham')->where('spTen','like','%'.$re->skey.'%')->where('thMa',$re->th)->paginate(50);   
        }
         if($re->loai !=null)
        {
             $db=DB::table('sanpham')->where('loaiMa',$re->loai)->paginate(50);   
        }
        if( $re->th !=null)
        {
            $db=DB::table('sanpham')->where('thMa',$re->th)->paginate(50);   
        }
        if($re->skey != null)
        {
            $db=DB::table('sanpham')->where('spTen','like','%'.$re->skey.'%')->paginate(50);
        }




        return view('admin.product')->with('db',$db);       
    }
 
// category //
public function addcategory(Request $re)
    {
        if($re->name == null)
        {
            Session::put('mescate','Tên loại không được để trống !'); 
            return Redirect('admintype');
        }
        else
        {
            $check= DB::table('loai')->Where('loaiTen',$re->name)->first();
            if($check != null)
            {
               
                Session::put('mescate','Loại đã tồn tại !');
                return Redirect('admintype'); 
            }
            else
            {
                 $data = array();
                $data['loaiTen'] = $re->name;
                DB::table('loai')->insert($data);
                Session::put('mescate','Thêm thành công !');
                return Redirect('admintype'); 
            }
        }
        
    }
    public function admindeletecate($id)
    {
        DB::table('loai')->where('loaiMa',$id)->delete();
        return Redirect('admintype');    
    }
    public function update($id)
    {
        $edit=DB::table('loai')->where('loaiMa',$id)->get();
            return view('admin.edit_cate')->with('para',$edit);
    }
public function edit(Request $re, $id)
    {
         $re->validate(['name'=>'required'],['name.required'=>'Vui lòng điền thông tin !']);
        $data['loaiTen']=$re->name;
        DB::table('loai')->where('loaiMa',$id)->update($data);
        return Redirect::to('/admintype');
    }

public function search_loai(Request $request)
    {
        $loai=DB::table('loai')->where('loaiTen','like','%'.$request->search_loai.'%')->first();
        if(!$loai)
        {
            return Redirect::to('admintype');
        }
        else
        {
             $sp=DB::table('loai')->where('loaiTen','like','%'.$request->search_loai.'%')->get();
             return view('admin.category')->with('db',$sp);
        }
    }

//-----







// brand

public function addbrand(Request $re)
{
     if($re->name == null)
        {
            Session::put('mescate','Tên thương hiệu không được để trống !'); 
            return Redirect('adminbrand');
        }
        else
        {
         $re->validate(['name'=>'required'],['name.required'=>'Vui lòng điền thông tin !']);
        $data['thTen'] = $re->name;
        DB::table('thuonghieu')->insert($data);
        return Redirect::to('adminbrand');
    }
    
}
public function deletebrand(Request $re)
{
    DB::table('thuonghieu')->where('thMa',$re->id)->delete();
      return Redirect::to('adminbrand');
}

public function goeditbrand(Request $re)
{
    
     $edit=DB::table('thuonghieu')->where('thMa',$re->id)->get();
        return view('admin.edit_brand')->with('para',$edit);
}
 public function editbrand(Request $re)
 {
    $re->validate(['name'=>'required'],['name.required'=>'Vui lòng điền thông tin !']);
    $data['thTen']=$re->name;
    DB::table('thuonghieu')->where('thMa',$re->id)->update($data);
    return redirect::to('adminbrand');
 }

 public function search_brand(Request $request)
    {
        $loai=DB::table('thuonghieu')->where('thTen','like','%'.$request->search_brand.'%')->first();
        if($loai ==null)
        {
            return Redirect::to('adminbrand');
        }
        else
        {
             $sp=DB::table('thuonghieu')->where('thTen','like','%'.$request->search_brand.'%')->get();
        
            return view('admin.brand')->with('db',$sp);
        }
       
    }


//----


 //----- End process -----//

// -- Login -- //
    public function checklogin(Request $re)
    {
    	if($re == null)return;
    	else 
    	{
    		$username=$re->username;
    		$password=md5($re->password);
    		$result=DB::table('khachhang')->where('khTaikhoan',$username)->where('khMatkhau',$password)->first();
    		if($result && $result->khQuyen >=2)
    		{
    			Session::put('adminname',$username);
                Session::put('adminQuyen',$result->khQuyen);
    			return Redirect::to('/admin');
    		}
    		else
    		{
    			Session::put('error','Wrong username or password !');
    			return Redirect::to('adlogin');
    		}
    	}
    }
// --endlogin -- //

}
