<?
//   session_destroy();
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
                
    <title>Register</title>
</head>

<body>
    
<div class="wrapper" style="background-color: #1e2e3b;">
    
    <div class="inner">
        <div class="image-holder">
            <!-- <img class="login-img" src="static/assets/login.png" alt="Login Image" style="visibility: hidden;"> -->
        </div>
        <form action="#" method="POST">
        <h2 class="sign-up-heading">SIGN UP</h2>
        <div class="form-wrapper">
            <input type="text" class="form-control" id="sg_name" placeholder="Full Name">
        </div>
        <div class="form-wrapper">
            <input type="email" class="form-control" id="sg_email" placeholder="Email">
            <i class="zmdi zmdi zmdi-email"></i>
        </div>
        <div class="form-wrapper">
            <input type="password" class="form-control" id="sg_password" placeholder="Password">
            <i class="zmdi zmdi zmdi-lock"></i>
        </div>
        <div class="form-wrapper">
            <input type="password" class="form-control" id="sg_conf_password" placeholder="Confirm Password">
            <i class="zmdi zmdi zmdi-lock"></i>
        </div>
        <div class="flex-two">
            <div class="form-wrapper">
                <input type="text" class="form-control" id="sg_course" placeholder="Course (CO)">
            </div>
            <div class="form-wrapper">
                <input type="text" class="form-control" id="sg_enrid" placeholder="Enrollment ID">
            </div>
        </div>
        <div class="flex-two">
            <div class="form-wrapper">
                <input type="text" class="form-control" id="sg_semester" placeholder="Semester">
            </div>
            <div class="form-wrapper">
                <input type="text" class="form-control" id="sg_year" placeholder="Year">
            </div>
        </div>

        <div class="flex-side">
            <div class="form-check form-check-inline input-radio">
                <input class="form-check-input" type="radio" name="role" id="student" onchange="change_role(this.value)" value="student" checked>
                <label class="form-check-label" for="student">Student</label>
            </div>
            <div class="form-check form-check-inline input-radio1">
                <input class="form-check-input" type="radio" name="role" onchange="change_role(this.value)" id="teacher" value="teacher">
                <label class="form-check-label" for="teacher">Teacher</label>
            </div>
        </div>

        <div class="form-group container-login100-form-btn">
            <button id="btn-signup" type="button" onclick="signup_Click()"> 
                Sign Up
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </div>

        <div class="w-full text-center">
            <a href="./login.php" class="text-dark">Already have an account? Sign in</a>
        </div>
    </form>
    </div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/login.js"></script>

</body>
</html>