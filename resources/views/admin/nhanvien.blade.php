@extends('admin.layout')
@section('title')
 Quản lý nhân viên
@endsection

@section('content')

<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
 Quản lý nhân viên
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <a href="{{URL::to('addmember')}}" class="btn btn-success" >Thêm nhân viên</a>

      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <form action="{{URL::to('/tim-nv')}}" method="get">
        {{csrf_field()}}
              <div class="input-group">
                <input type="text" name="tennv" class="input-sm form-control" placeholder="Search" >
                <span class="input-group-btn">
                  <input type="submit" value="Tìm" class="btn btn-success">
                </span>
              </div>
        </form>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Stt</th>
            <th>Mã</th>
            <th>Tên</th>
            <th>SDT</th>
            <th>Ngày sinh </th>
            <th>Tài khoản</th>
            <th>Quyền</th>
            <th>Email</th>
            <th>Hành động</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody  style="text-align:  center;">
          
          
          <tr>
          
            @foreach($db as $k => $v)
            <td>{{$k +1 }}</td>
            <td>{{$v->khMa}}</td>
            <td>{{$v->khTen}}</td>
            <td>{{$v->khSdt}}</td>
            <td>{{$v->khNgaysinh}}</td>
            <td>{{$v->khTaikhoan}}</td>
            <td>{{$v->khQuyen}}</td>
            <td>{{$v->email}}</td>
           

              <td>
              <a href="{{URL::to('editmem/'.$v->khMa)}}" class="active" ui-toggle-class=""><i class="fa far fa-edit"></i></a>&nbsp;

              @if($v->khMa!='ADMIN_MASTER')
              <a href="{{URL::to('deletemeber/'.$v->khMa)}}" ><i class="fa fas fa-trash" style="color: red;"></i></a>
              @endif
            </td>
          </tr>
            @endforeach

      
          
        </tbody>
      </table>
    </div>
{{-- paging --}}
   <div class="col-sm-4">

       <span>
{{-- 
        <table border="2" style="padding: 2px;margin: 3px; background-color: #DBD0D0;color: #0B21F5">
        
      <tr>
        <td>
          @if($db->currentPage()==1)
            <span><a href="#">Trang trước</a> </span> 
           @else
           <span><a href="{{$db->previousPageUrl()}}">Trang trước</a> </span>
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
         <span><a href="#">Trang kế</a> </span>
        @else
       <span><a href="{{$db->nextPageUrl()}}">Trang kế</a> </span>
       @endif
     </td>
        </tr>
       </table> --}}
         
       </span>  

   </div>

{{--  --}}
    <footer class="panel-footer">
      <div class="row">
     {{--   <span>      Trang {{$db->currentPage()}} trong số {{$db->lastPage()}} trang</span><br> --}}
    
      </div>
    </footer>
  </div>
</div>
</section>
    
@endsection