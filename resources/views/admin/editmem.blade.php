      @extends('admin.layout')
      @section('title')
      Sửa thông tin
    @endsection


    @section('content')      

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
           <div class="col-md-5">
            <div class="panel-body">
            @foreach($db as $v)
                     <form action="{{URL::to('updatemem/'.$v->khMa)}}" method="post">
                   {{csrf_field()}}
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{$v->khTaikhoan}}" required class="form-control" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password"  value="{{$v->khMatkhau}}"  required class="form-control" id="password">
              </div>

              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" name="name"  value="{{$v->khTen}}"  required class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="email">Email</label>
                <input type="email" name="email"  value="{{$v->email}}"  required class="form-control" id="password">
              </div>
              
              <div class="form-group first">
         
                <input type="date" name="date"  value="{{$v->khNgaysinh}}"  required class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="number">Phonenumber</label>
                <input type="number" name="phone"  value="{{$v->khSdt}}"  required class="form-control" id="password">
              </div>
               <div class="form-group last mb-3">
                <label for="email">Permission</label>
                <input type="number" name="quyen"  value="{{$v->khQuyen}}"   class="form-control" id="password">
              </div>
              <input type="submit" value="Sửa" class="btn btn-block btn-primary">
            </form>
            @endforeach
            </div>
          </div>
        </section>
    </section>
</section>
@endsection