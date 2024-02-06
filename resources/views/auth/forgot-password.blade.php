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

    <title>Forgot</title>
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
                <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
            <form method="POST" action="{{ route('password.email') }}">
        @csrf
              <h3>Forgot your password? </h3>
              <h6>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
            </div>
            

              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="Email" name="email">    
              </div>
              <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

              <div>
                <span class="ml-auto"><a href="{{route('login')}}" class="forgot-pass">Sign in</a></span> 
              </div>

              <input type="submit" value="Email Password Reset Link" class="btn text-white btn-block btn-primary">


              
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