
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{{'public/frontend/login/fonts/icomoon/style.css'}}}">

    <link rel="stylesheet" href="{{{'public/frontend/login/css/owl.carousel.min.css'}}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{{'public/frontend/login/css/bootstrap.min.css'}}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{{'public/frontend/login/css/style.css'}}}">

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{{'public/frontend/login/images/bg_2.jpg'}}}');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3>Register</h3>
              <p style="color: red" class="mb-4">
                <?php 
                  $mes = Session::get('loginmessage'); 
                  if(isset($mes))
                  {
                    echo $mes;
                    Session::put('loginmessage','');
                  }

                ?> 
                  
                </p>
            </div>
            <form action="{{URL::to('/checkregister')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>

              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" name="name" class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="password">
              </div>
              
              <div class="form-group first">
         
                <input type="date" name="date" class="form-control" id="username">
              </div>

              <div class="form-group last mb-3">
                <label for="number">Phonenumber</label>
                <input type="number" name="phone" class="form-control" id="password">
              </div>

         

              <input type="submit" value="Register" class="btn btn-block btn-primary">


              <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>
                  <span class="d-block text-center my-4 text-muted"><a href="{{URL::to('/')}}">Back to Home page</a>&nbsp;/&nbsp;<a href="{{URL::to('/login')}}">Have a account?</a></span>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{{'public/frontend/login/js/jquery-3.3.1.min.js'}}}"></script>
    <script src="{{{'public/frontend/login/js/popper.min.js'}}}"></script>
    <script src="{{{'public/frontend/login/js/bootstrap.min.js'}}}"></script>
    <script src="{{{'public/frontend/login/js/main.js'}}}"></script>
  </body>
</html>