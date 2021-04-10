<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>{{$details['title']}}</h1>
	<div>Xin chào {{$details['username']}}, thông tin hóa đơn của bạn:
		<div>Mã hóa đơn:{{$details['hdMa']}} </div>
		<div>Ngày đặt hàng:{{$details['hdNgaylap']}} </div>
		<div>Số lượng sản phẩm:{{$details['totalQuanty']}} </div>
		<div>Tổng tiền:{{$details['totalPrice']}}VND </div>
	</div>
</body>
</html>