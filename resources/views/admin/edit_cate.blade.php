@extends('admin.layout')
@section('content')
<section id="main-content">
	<section class="wrapper">
 <div class="col-sm-5 m-b-xs"> 
     {{$errors->first('name')}}
                  @foreach($para as $k => $v)
               <div class="form-group">
                <form action="{{URL::to('/updatecate/'.$v->loaiMa)}}" method="post" accept-charset="utf-8">
                  {{csrf_field()}}
         <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Tên loại: </label>
                        <div class="col-lg-5">
                            <input value="{{$v->loaiTen}}" class="form-control input-sm m-bot15" name="name" type="text" placeholder=".input-sm">
                        </div>
                             <button class="btn btn-info" type="">Sửa loại</button> 
                </form>
                             @endforeach
                  
			</div>
      </div>
      </section>
  </section>
 @endsection