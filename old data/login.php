<?php
  $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/login.css" />

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="./assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <title>Login</title>
</head>

<body>

  <div class="wrapper" style="background-color: #1e2e3b;">

    <div class="inner">
      <div class="image-holder">
        <!-- <img class="login-img" src="./assets/img/login.png" alt="Login Image"> -->
      </div>
      <form action="" method="POST">
        <h2 class="sign-up-heading">SIGN IN</h2>
        <h4 class="sign-up-heading">A Smarter Way To Connect.</h4>
        <div class="form-wrapper">
          <input type="email" class="form-control" id="si_email" placeholder="Email">
          <i class="zmdi zmdi zmdi-email"></i>
        </div>

        <div class="form-wrapper">
          <input type="password" class="form-control" id="si_password" placeholder="Password">
          <i class="zmdi zmdi zmdi-lock"></i>
        </div>

        <div class="form-group container-login100-form-btn">
          <button id="btn-signin" type="button" onclick="signin_Click()">
            Sign In
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </div>

        <div class="w-full text-center">
          <a href="#" class="text-dark">Forgot Password?</a>
        </div>

        <div class="w-full text-center" style="margin-top: 17%;">
          <a href="./register.php" class="text-dark">Don't have an account? Sign up</a>
        </div>
      </form>
    </div>
  </div>
  
  <!----------Javascript----------->

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/login.js"></script>

</body>

</html>