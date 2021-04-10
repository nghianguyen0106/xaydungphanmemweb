      @extends('admin.layout')
      @section('title')
      Sửa sản phẩm
    @endsection


    @section('content')      

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <div class="panel-body">
               @foreach($data as $val)
                <form class="form-horizontal bucket-form" action="{{URL::to('updateproduct/'.$val->spMa)}}"  method="post" enctype="multipart/form-data">
                  {{ csrf_field()}}
                    <div class="form-group">
                        <h3 class="col-form-label-lg" for="inputSuccess">Sửa sản phẩm</h3>
                        <div class="col-lg-6">
                            {{-- fetch data from table  --}}
                            <label>Tên sản phẩm</label>
                            <input class="form-control m-bot15" name="name" type="text" placeholder="Default input" value="{{$val->spTen}}" required>
                            <label>Giá</label>
                             <input class="form-control m-bot15" name="price" type="text" placeholder="Default input" required  value="{{ ($val->spGia)}}">
                             <label>Thời gian bảo hành (tháng)</label>
                              <input class="form-control m-bot15" name="bh" type="text" placeholder="Default input" required  value="{{$val->spBaohanh}}">
                            <label>Hình</label>
                              <input class="form-control m-bot15" name="img" type="file" placeholder="Default input"  accept="image/x-png,image/gif,image/jpeg">
                            <label>Tình trạng( bằng 1 còn khàng \ khác 1 : hết hàng)</label>
                              <input class="form-control m-bot15" name="status" type="text" placeholder="Default input" required value="{{$val->spTinhtrang}}" >

                      
                             <label>Thương hiệu</label>
                           <select class="form-control m-bot15" name="th">
                              <?php  $findth=DB::table('thuonghieu')->where('thMa',$val->thMa)->get(); ?>
                              @foreach($findth as $o)
                              <option value="{{$o->thMa}}">{{$o->thTen}}</option>}
                              @endforeach
                            @foreach($th as $k => $v)
                                <option value="{{$th[$k]->thMa}}" >{{$th[$k]->thTen}}</option>
                            @endforeach
                            </select>

                             <label>Loại</label>
                            <select class="form-control m-bot15" name="loai">

                              <?php $findloai=DB::table('loai')->where('loaiMa',$val->loaiMa)->get(); ?>
                                @foreach($findloai as $oo)
                                
                                <option value="{{$oo->loaiMa}}">{{$oo->loaiTen}}</option>

                                @endforeach

                                @foreach($loai as $k => $v)
                                <option value="{{$loai[$k]->loaiMa}}" >{{$loai[$k]->loaiTen}}</option>
                                @endforeach
                            </select>

                        
                            <br>
                            @endforeach
                    <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
</section>


@endsection