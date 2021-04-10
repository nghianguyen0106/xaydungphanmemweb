@extends('admin.layout')
@section('title')
 Quản lý sản phẩm
@endsection

@section('content')
<?php
 $th = DB::table('thuonghieu')->get();
    $loai= DB::table('loai')->get();
    ?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý sản phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <a href="{{URL::to('/addproduct')}}" class="btn btn-success" >Thêm sản phẩm</a>

      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-10" style="width: 800px; height: 50px;float: left;">
         <form style="" action="{{URL::to('/tim-sp')}}" method="post" accept-charset="utf-8">
            <div class="col-sm-3 m-b-xs">
              
              {{csrf_field()}}
              <div class="input-group">
                <input type="text" name="skey" class="input-sm form-control" placeholder="Search" >
                <span class="input-group-btn">
                  <input type="submit" value="Tìm" class="btn btn-success">
                </span>
              </div>
              
            </div>
            <div class="col-sm-4" >
              <label for="">Loại</label>
              <select name="loai" >
                <option value=""></option>
                @foreach ($loai as $value) 
                <option  value="{{$value->loaiMa}}">{{$value->loaiTen}}</option>
                @endforeach
              </select><br>
              <label for="">Thương hiệu</label>
              <select name="th" >
                <option value=""></option>
                @foreach ($th as $value) 
                <option  value="{{$value->thMa}}">{{$value->thTen}}</option>
                @endforeach
              </select>
            </div>
    </form>
      </div>
 
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Stt</th>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Thương hiệu</th>
            <th>Loại</th>
            <th>Bảo hành</th>
            <th>Hình</th>
            <th>Tình trạng</th>
            <th>Hành động</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody  style="text-align:center;">
          
          
          <tr>  
          
            @foreach($db as $k => $v)
            <td>{{$k +1 }}</td>
            <td>{{$v->spMa}}</td>
            <td>{{$v->spTen}}</td>
            <td>{{number_format($v->spGia)}} VND</td>

            <?php $findt=DB::table('thuonghieu')->where('thMa',$v->thMa)->get(); ?>
            <td>{{ $findt[0]->thTen}}</td>

            <?php $findl=DB::table('loai')->where('loaiMa',$v->loaiMa)->get(); ?>
            <td>{{ $findl[0]->loaiTen}}</td>



            <td>{{$v->spBaohanh}}</td>
            <td><img style="widows: 100px;height: 100px;" src="{{{'public/frontend/img/'.$v->spHinh}}}" alt="hinh"></td>
            <td>
                @if($v->spTinhtrang ==1)
                  <i class="fa fa-check text-success text-active"></i></td>
                  @endif
                  @if($v->spTinhtrang !=1)
                  <i class="fa fa-times text-danger text" style="color: red;"></i></td>
                  @endif

              <td>
              <a href="{{URL::to('editproduct/'.$v->spMa)}}" class="active" ui-toggle-class=""><i class="fa far fa-edit"></i></a>&nbsp;<a href="{{URL::to('deleteproduct/'.$v->spMa)}}" ><i class="fa fas fa-trash" style="color: red;"></i></a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
{{-- paging --}}
   <div class="col-sm-4" style="border-radius: 10px;">

       <span style="border-radius: 10px;">

        <table class="page table-bordered"  style="border-radius: 10px; background-color: #DBD0D0;color: #0B21F5">
        
      <tr>
        <td>
          @if($db->currentPage()==1)
            <span><a href="#"></a> </span> 
           @else
           <span><a href="{{$db->previousPageUrl()}}"><--</a> </span>
           @endif
          </td>

          @foreach($db->getUrlRange(1,$db->lastPage()) as $page => $url)
            @if($page == $db->currentPage())
            <td><a>{{$page}}</a></td>
            @else
           <td> <a href="{{$url}}">{{$page}}</a></td>
            @endif
          @endforeach

           <td> @if($db->currentPage()==$db->lastPage())
         <span><a href="#"></a> </span>
        @else
       <span><a href="{{$db->nextPageUrl()}}">--></a> </span>
       @endif
       </td>
        </tr>
       </table>
         
       </span>  

   </div>

{{--  --}}
    <footer class="panel-footer">
      <div class="row">
       <span>Trang {{$db->currentPage()}} trong số {{$db->lastPage()}} trang</span><br>
    
      </div>
    </footer>
  </div>
</div>
</section>
    <style type="text/css" media="screen">
      .page{
        text-align: center;
        color:#0D0DF1;
      }
      .page td{
        padding: 10px;
        width: 150px;
      }
      .page a{
        text-decoration: none;
      }
      .page td:hover{
        background-color:#53EF69;
      }
    </style>
@endsection