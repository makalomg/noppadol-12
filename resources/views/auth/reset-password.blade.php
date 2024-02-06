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

    <title>Reset Password</title>
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
              <h3>Reset Password</h3>
            </div>
            <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
              

              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="Email" name="email" value="{{ $request->email }}">

              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password Comfirm</label>
                <input type="password" class="form-control" id="password" name="password_confirmation">
                
              </div>
              

              <input type="submit" value="Reset Password" class="btn text-white btn-block btn-primary">


              
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