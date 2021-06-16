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
    <title>Profile</title>
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
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#"> Contact us </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"> My Notes </a>
        </li>   
      </ul>
      <ul class="navbar-nav nav">
        <li class="nav-item"><a class="nav-link" href="#">Logged in as <b>username</b></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
    <!--container-->
    <style>
        #container {
            margin-top: 140px;
        }
        tr {
            cursor: pointer;
        }
    </style>
   <div class="contaier" id="container">
       <div class="row">
           <div class="col-md-6 offset-md-3"style="background-color: rgba(211, 211, 211, 0.5);">
               <h2>General Account Settings</h2>
               <div class="table-responsive">
                   <table class="table table-hover table-condensed table-bordered">
                       <tr data-bs-target="#updateusername" data-bs-toggle="modal">
                           <td>Username</td>
                           <td>Value</td>
                       </tr>
                       <tr  data-bs-target="#updateemail" data-bs-toggle="modal">
                           <td>Email</td>
                           <td>Value</td>
                       </tr> 
                       <tr  data-bs-target="#updatepassword" data-bs-toggle="modal">
                           <td>Password</td>
                           <td>hiden</td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
   </div>

   <!--updateemail-->
   <form method="post" id="updateemailform">
<div class="modal fade" id="updateemail" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Enter New Email</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- login message from PHP file -->
      <div id="loginupmessage"></div>
          <div class="mb-3">
            <label for="loginemail" class="col-form-label">Email:</label>
              <input type="text" class="form-control" name="email" id="email" maxlength="50" value="email value">
          </div>
          
          
        </div>
        
        
          <div class="modal-footer">
            <input type="submit" class="btn green" name="updateusername" value="submit">
         
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>

          
    

          
        
    </div>
  </div>
</div>
</form>


   <!--updateusername-->
   <form method="post" id="updateusernameform">
<div class="modal fade" id="updateusername" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edot Username </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- login message from PHP file -->
      <div id="loginupmessage"></div>
          <div class="mb-3">
            <label for="loginemail" class="col-form-label">Username:</label>
              <input type="text" class="form-control" name="username" id="username" maxlength="30" value="username value">
          </div>
          
          
        </div>
        
        
          <div class="modal-footer">
            <input type="submit" class="btn green" name="updateusername" value="submit">
         
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>

          
    

          
        
    </div>
  </div>
</div>
</form>
<!--updatepassword-->
<form method="post" id="updatepasswordform">
<div class="modal fade" id="updatepassword" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Enter Current and New password</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--- login message from PHP file -->
      <div id="loginupmessage"></div>
          <div class="mb-3">
            <label for="currentpadsword" class="col-form-label visually-hidden">Your Current Password:</label>
              <input type="password" class="form-control" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Your Current Password">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label visually-hidden">Password:</label>
              <input type="password" class="form-control" name="password" id="password" maxlength="30" placeholder="Choose your Password">
          </div>
          <div class="mb-3">
            <label for="password2" class="col-form-label visually-hidden">Confirm Password:</label>
              <input type="password" class="form-control" name="password2" id="password2" maxlength="30" placeholder="Confirm Password">
    </div>
          
        </div>
        
        
          <div class="modal-footer">
            <input type="submit" class="btn green" name="updateusername" value="submit">
         
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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


    
 
    <!--Jquery (necessary for bootstrap's Javascript plugins) -->
        

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>