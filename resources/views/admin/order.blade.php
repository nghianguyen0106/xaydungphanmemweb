@extends('admin.layout')
@section('title')
 Quản lý thương hiệu
@endsection

@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý hóa đơn
    </div>
    <div class="row w3-res-tb">
      <form action="{{URL::to('/addbrand')}}" method="post" accept-charset="utf-8">
        {{csrf_field()}}
         <div class="col-sm-5 m-b-xs">
      </div>
      </form>
     
      <div class="col-sm-4">
      </div>
    
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           <th>STT</th>
            <th>Mã đơn</th>
            <th>Tên khách hàng</th>
            <th>Tổng tiền</th>
            <th>Tổng sản phẩm</th>
            <th>Ngày lập</th>
            <th>Hành động</th>
   
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($db as $k => $v)
            <td>{{$k+1}}</td>
            <td>{{$v->hdMa}}</td>
            <?php $x = DB::table('khachhang')->where('khMa',$v->khMa)->get(); ?>
                @foreach($x as $v2)

                <td>{{$v2->khTen}}</td>
                @endforeach

            <td>{{$v->hdTongtien}}</td>
            <td>{{$v->hdTongsp}}</td>
            <td>{{$v->hdNgaylap}}</td>
              <td>
             
                <a href="{{URL::to('orderinfo/'.$v->hdMa)}}"class="btn btn-info" ui-toggle-class=""><i style="font-size: 20px"class="fa far fa-eye"></i></a>
              </td>
       
            
          </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      
    </footer>
  </div>
</div>
</section>

@endsection
  