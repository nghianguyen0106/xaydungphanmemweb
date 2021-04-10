@extends('layout')
@section('user_content')
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h3><b>Hoá đơn của bạn</b></h3>
			<div>
				<?php
					$data = DB::table('hoadon')->where('khMa',Session::get('khMa'))->get();
				?>
				<table border="1" style="width: 100%;text-align: center;">
					<thead>
						<tr style="background-color: #CF7DEE;color: white;">
							<td>Mã hóa đơn</td>
							<td>Số lượng sản phẩm đặt</td>
							<td>Tổng tiền</td>
							<td>Ngày đặt</td>
						</tr>
					</thead>
					<tbody>
						
					
				@foreach($data as $v)
						<tr>
							<td>{{$v->hdMa}}</td>
							<td>{{$v->hdTongsp}}</td>
							<td>{{number_format($v->hdTongtien)}}</td>
							<td>{{$v->hdNgaylap}}</td>
						</tr>
						<tr>
							<td colspan="4" style="background-color:lightgrey"></td>
							
						</tr>
				@endforeach
				</tbody>
				</table>
				
			</div>
		</div>
	</div>	
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
@endsection
