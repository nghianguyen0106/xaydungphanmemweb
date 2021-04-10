@extends('admin.layout')
@section('title')
Edit Brand
@endsection
@section('content')
<section id="main-content">
	<section class="wrapper">
 <div class="col-sm-5 m-b-xs"> 
{{$errors->first('name')}}
                  @foreach($para as $k => $v)
               <div class="form-group">
                <form action="{{URL::to('/updatebrand/'.$v->thMa)}}" method="post" accept-charset="utf-8">
                  {{ csrf_field() }}
         <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Tên thương hiệu: </label>
                        <div class="col-lg-5">
                            <input value="{{$v->thTen}}" class="form-control input-sm m-bot15" name="name" type="text" placeholder=".input-sm">
                        </div>
                             <button class="btn btn-info" type="">Sửa thương hiệu</button> 
                </form>
                             @endforeach
                  
			</div>
      </div>
      </section>
  </section>
 @endsection