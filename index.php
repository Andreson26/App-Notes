<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
   
    <title>Online Notes App</title>
  </head>
  <body>
    <!--Navigation bar-->
    <nav role="navigation" class="navbar navbar-expand-lg  navbar-dark navbar-custom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
      
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#"> Contact us </a>
        </li>
      </ul>
      <ul class="navbar-nav nav">
        <li class="nav-item"><a class="nav-link" href="#loginModal" data-bs-toggle="modal">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    <!--Jumbotron with sign up button-->
<div class="jumbotron" id="myContainer">
    <h1>Online Notes App</h1>
    <p>Your notes  with you wherever you go!</p>
    <p>Easy to use, protects all your notes</p>
    <button type="button" class="btn btn-lg green signup" data-bs-target="#signupModal" data-bs-toggle="modal">Sign up it's free</button>
</div>

    <!--sign form-->
<form method="post" id="signupform">
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myleModalLabel">Sign up today and Start usign our Online Notes App</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- signup message from PHP file -->
      <div id="signupmessage"></div>
          <div class="mb-3">
            <label for="username" class="col-form-label visually-hidden">Username:</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" maxlength="30">
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label visually-hidden">Email:</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" maxlength="50">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label visually-hidden">choose a password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Choose a password" maxlength="50">
          </div>  
          <div class="mb-3">
            <label for="password2" class="col-form-label visually-hidden">confirm your password:</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm your password" maxlength="50">
          </div>   
            
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn green" name="sigup">Sign up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>
</form>
    <!--login up form-->
    <form method="post" id="loginform">
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Login:</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- login message from PHP file -->
      <div id="loginupmessage"></div>
          <div class="mb-3">
            <label for="loginemail" class="col-form-label visually-hidden">Email:</label>
              <input type="text" class="form-control" name="loginemail" id="login" placeholder="Email" maxlength="30">
          </div>
          <div class="mb-3">
            <label for="loginpassword" class="col-form-label visually-hidden">Password:</label>
              <input type="text" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
          </div>
          <div class="mb-3 form-check">
            <label>
              <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
              Remember me
            </label>
            <a class="float-end" data-bs-toggle="modal" data-bs-target="#forgotpasswordModal" data-bs-dismiss="modal" style="cursor: pointer">Forget Password?</a>
          </div>  
         
          
        </div>
        
        <div>
          <div class="float-start modal-footer">
            <button type="register" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-target="#signupModal" data-bs-toggle="modal">Register</button>
          </div>
          <div class="float-end modal-footer">
            <button type="submit" class="btn green" name="login">Login</button>
         
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>

          
        </div>

          
        
    </div>
  </div>
</div>
</form>


    <!--Forgott password form--> 
    <form method="post" id="forgotpasswordform">
  <div class="modal fade" id="forgotpasswordModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Forgot Password? Enter your email address</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- forgot passwoed message from PHP file -->
      <div id="forgotpasswordmessage"></div>
          <div class="mb-3">
            <label for="forgotpasswordemail" class="col-form-label visually-hidden">Email:</label>
              <input type="text" class="form-control" name="forgotpasswordemail" id="forgotpasswordemail" placeholder="Email" maxlength="50">
          </div>
         
            
        
          <div class="float-start modal-footer">
            <button type="button" class="btn btn-secondary " data-bs-dismiss="modal" data-bs-target="signupModal" data-bs-toggle="modal">Register</button>
          </div>
        
          <div class= "float-end modal-footer">
            <input type="submit" class="btn green" name="forgotpassword" value="submit">
         
            <button type="button" class="btn btn-secondary float left" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>

      </div>
  </div>
</form>

    <!--Footer--> 
    <div class="footer">
        <div class="container">
            <p>One of my project porfolio copyright &copy; 2020-<?php $today = date("Y"); echo $today ?>.</p>
        </div>
    </div>
 
    <!--Jquery (necessary for bootstrap's Javascript plugins -->
        

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>