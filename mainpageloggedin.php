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
    <title>My Notes</title>
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
        #notePad, #allNotes, #done {
            display: none;
        }
        textarea {
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5rem;
            border-left-width: 20px;
            border-color: #CA3DD9;
            color: #CA3DD9;
            background-color: #FBEFFF;
            padding: 10px;
        }
    </style>
<div class="container" id="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mb-4">
            
                    <button id="addNode" type="button" class="btn btn-info btn-lg">Add Note</button>
                    <button id="allNotes" type="button" class="btn btn-info btn-lg">All Notes</button>
                
                
                    <button id="done" type="button" class="float-end btn green btn-lg">Done</button>
                    <button id="edit" type="button" class="float-end btn btn-info btn-lg">Edit</button>
            
            </div>
            <div id="notePad">
                <textarea rows="10"></textarea>
            </div>
            <div id="notes" class="notes">
                <!--Ajax call to a php file-->
            </div>
        </div>

    </div>
</div>

    
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