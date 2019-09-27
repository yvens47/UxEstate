<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

    <title>UxEstate</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="site.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <style>
  
      
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-dark">
    <a class="navbar-brand" href="#">UxEstate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./App.php">properties</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="#contactus">Contact</a>
        </li>
      </ul>

      <ul class="navbar-nav float-right">
        <li class="nav-item active">
          <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Login</a>
        <div class="dropdown-menu  dropdown-menu-right" id='login'aria-labelledby="dropdown01">
          
          <!-- login box-->
          <form method='POST' action='login.php'>
                    <div class="form-group">
                        <img class='img-fluid' src="https://better-digital-artist.com/wp-content/uploads/2019/04/picture_nicolas_delille.png"/>

                      <!-- <label for="exampleInputEmail1">Email address</label> -->
                      <input name='username' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                      <!-- <label for="exampleInputPassword1">Password</label> -->
                      <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                      <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                      <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                    </div>
                    <button type="submit" class="btn btn-info">Login</button>
                    <hr/>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </form>

           <!-- login box-->

        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link btn btn-info" href="./add.php">Add a listing <span class="sr-only">(current)</span></a>
        </li>
      
        
        
      </ul>
      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
</header>

<main role="main">