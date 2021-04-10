@extends('admin.layout')
@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    	Hóa đơn
    	@foreach($db as $v)
    	{{ $x=$v->hdMa}}
    	<?php $e=$v->hdTongtien ?>
    	@endforeach
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Stt</th>
            <th>Mã sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Tạm tính</th>
          </tr>
        </thead>
        <tbody>
        	<?php $y=DB::table('chitiethoadon')->where('hdMa',$x)->get(); ?>
          @foreach($y as $k=> $v2)
        	<tr>
        		<td>{{$k}}</td>
        		<td>{{$v2->spMa}}</td>
        		<td>{{$v2->cthdSoluong}}</td>
        		<td>{{number_format($v2->cthdGia)}} VND</td>
        	</tr>
        @endforeach
        </tbody>
      </table>
     <div><label>Tổng Tiền: {{number_format($e)}} VND</label> 
     	<a class="btn btn-success" href="{{URL::to('order')}}">Back</a>
     </div>
    </div>
  </div>
</div>
</section>

 <!-- footer -->
		  <div class="footer">
	
		  </div>
  <!-- / footer -->
</section>

@endsection