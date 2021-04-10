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
      Quản lý thương hiệu
    </div>
    <div class="row w3-res-tb">
      <form action="{{URL::to('/addbrand')}}" method="post" accept-charset="utf-8">
        {{csrf_field()}}
         <div class="col-sm-5 m-b-xs">

        <input type="text" name='name' class="input-sm form-control-plaintext">{{$errors->first('name')}}
        <button class="btn btn-success" type="submit">Thêm thương hiệu</button>
                 <p  style="color: blue; font-weight: bold;"> {{ Session::get('mescate')}}</p>
                     <?php Session::forget('mescate'); ?>
      </form>
      </div>
          
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
       <form action="{{URL::to('/tim-brand')}}" method="post" >
          {{csrf_field()}}
              <div class="input-group">
                <input type="text" name="search_brand" class="input-sm form-control" >
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
           
            <th>Mã</th>
            <th>Tên thương hiệu</th>
            <th>Hành động</th>
   
          </tr>
        </thead>
        <tbody>
          
          
          <tr>
            
     
            @foreach($db as $k => $v)
            <td>{{$v->thMa}}</td>
            <td>{{$v->thTen}}</td>
              <td>
              <a href="{{URL::to('editbrand/'.$v->thMa)}}" class="active" ui-toggle-class=""><i   style="font-size: 20px"class="fa far fa-edit"></i></a>&nbsp;<a href="{{URL::to('deletebrand/'.$v->thMa)}}"><i   class="fa fas fa-trash" style="color: red;font-size: 20px;"></i></a>
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