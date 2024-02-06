<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('authen/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('authen/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('authen/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('authen/css/style.css') }}">

    <title>Register</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="authen/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign up to <strong>บ้านผักปลายสวน</strong></h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
        @csrf
              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" class="form-control" id="username" name="name">

              </div>

              <div class="form-group first">
                <label for="email">Username</label>
                <input type="text" class="form-control" id="Email" name="username">

              </div>

              <div class="form-group first">
                <label for="email">Phone</label>
                <input type="text" class="form-control" id="Email" name="phone">

              </div>

              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="Email" name="email">

              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password Comfirm</label>
                <input type="password" class="form-control" id="password" name="password_confirmation">
                
              </div>
              

              <div>
                <span class="ml-auto"><a href="{{route('login')}}" class="forgot-pass">Sign in</a></span> 
              </div>

              <input type="submit" value="Sign Up" class="btn text-white btn-block btn-primary">


              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{ asset('authen/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('authen/js/popper.min.js') }}"></script>
    <script src="{{ asset('authen/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('authen/js/main.js') }}"></script>
  </body>
</html>