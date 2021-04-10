@extends('admin.layout')
@section('title')
 Quản lý loại sản phẩm
@endsection

@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý loại
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs"> 
               <div class="form-group">
                <form action="{{URL::to('/admin-addcategory')}}" method="post" accept-charset="utf-8">
                  {{ csrf_field()}}
            <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Tên loại</label>
                        <div class="col-lg-5">
                            <input class="form-control input-sm m-bot15" name="name" type="text" placeholder=".input-sm">
                        </div>
                             <button class="btn btn-success" href="" type="">Thêm loại</button> 
                </form>
                    <p  style="color: blue; font-weight: bold;"> {{ Session::get('mescate')}}</p>
                     <?php Session::forget('mescate'); ?>
                    </div>
      </div>
      <div class="col-sm-4">
      </div>
       <form action="{{URL::to('/tim-loai')}}" method="post" accept-charset="utf-8">
   {{ csrf_field()}}
                <div class="input-group">
                <input type="text" name="search_loai" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                  <input type="submit" value="Tìm" class="btn btn-success">
                </span>
              </div>
            </form>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên loại</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody  >
          
          
          <tr>
            
            @foreach($db as $k => $v)

            <td>{{$k+1}}</td>
            <td>{{$v->loaiTen}}</td>
              <td>
              <a href="{{URL::to('/editcate/'.$v->loaiMa)}}" ui-toggle-class="" onclick="link()"><i style="font-size: 20px" class="fa far fa-edit"></i></a>&nbsp;<a  href="{{URL::to('/admindeletecate/'.$v->loaiMa)}}"><i  class="fa fas fa-trash" style="color: red;font-size: 20px;"></i></a>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
      
        
      </div>
    </footer>
  </div>
</div>
</section>
</section>

@endsection

