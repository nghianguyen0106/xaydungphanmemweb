      @extends('admin.layout')
      @section('title')
      Thêm sản phẩm
    @endsection


    @section('content')      

<section id="main-content">
    <section class="wrapper">
        <section class="panel">
          <div class="col-md-5">
             <div class="panel-body">
                 <form action="{{URL::to('addmem')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" required class="form-control" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" required class="form-control" id="password">
              </div>

              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" name="name" required class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control" id="password">
              </div>
              
              <div class="form-group first">
         
                <input type="date" name="date" required class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="number">Phonenumber</label>
                <input type="number" name="phone" required class="form-control" id="password">
              </div>
               <div class="form-group last mb-3">
                <label for="email">Permission</label>
                <input type="number" name="quyen"  class="form-control" id="password">
              </div>

         

              <input type="submit" value="Thêm" class="btn btn-block btn-primary">
            </form>
            </div>  
          </div>
           
        </section>
    </section>
</section>


@endsection