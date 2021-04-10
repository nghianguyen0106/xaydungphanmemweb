      @extends('admin.layout')
      @section('title')
      Thêm sản phẩm
    @endsection


    @section('content')      

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <div class="panel-body">
                <form class="form-horizontal bucket-form" action="{{URL::to('addproduct2')}}"  method="post" enctype="multipart/form-data">
                  {{ csrf_field()}}
                    <div class="form-group">
                        <h3 class="col-form-label-lg" for="inputSuccess">Thêm sản phẩm</h3>
                        <div class="col-lg-6">
                            
                            <label>Tên sản phẩm</label>
                            <input class="form-control m-bot15" name="name" type="text" placeholder="Default input">
                            <p class=" alert-danger"> {{ $errors->first('name')}}</p>
                           <br> <label>Giá</label>
                             <input class="form-control m-bot15" name="price" type="text" placeholder="Default input"> <p class=" alert-danger">{{ $errors->first('price')}}</p>
                            <br> <label>Thời gian bảo hành</label>
                              <input class="form-control m-bot15" name="bh" type="text" placeholder="Default input">
                              <p class=" alert-danger">{{ $errors->first('bh')}}</p>
                          <br>  <label>Hình</label>
                              <input class="form-control m-bot15" name="img" type="file" placeholder="Default input" accept="image/x-png,image/gif,image/jpeg"> <p class=" alert-danger">{{ $errors->first('img')}}</p>
                        <br>    <label>Tình trạng</label>
                              <input class="form-control m-bot15" name="status" type="text" placeholder="Default input">
                             <p class=" alert-danger">  {{ $errors->first('status')}}</p>
                         <br>    <label>Thương hiệu</label>
                           <select class="form-control m-bot15" name="th">
                            @foreach($th as $k => $v)
                                <option value="{{$th[$k]->thMa}}" >{{$th[$k]->thTen}}</option>
                            @endforeach
                            </select>
                            <p class=" alert-danger"> {{ $errors->first('th')}}</p>
                          <br>   <label>Loại</label>
                            <select class="form-control m-bot15" name="loai">
                            @foreach($loai as $k => $v)
                                <option value="{{$loai[$k]->loaiMa}}" >{{$loai[$k]->loaiTen}}</option>
                                @endforeach
                            </select>
                           <p class=" alert-danger">  {{ $errors->first('loai')}}</p>
                            <br>
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <a class="btn btn-success" href="{{URL::to('adminproduct')}}" >Trở về</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
</section>


@endsection