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
<link rel="stylesheet" href="http://localhost:8080/UxEstate/site.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="account.css">


    <style>
  
      
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark  fixed-top bg-dark">
    <a class="navbar-brand" href="/UxEstate/">UxEstate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      
      </ul>

      <ul class="navbar-nav float-right">
      <?php if($user->isLoggedIn()):?>
      
        <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Account</a>
        <div class="dropdown-menu  dropdown-menu-right" id='login'aria-labelledby="dropdown01">
          
          <!-- login box-->
         
                    <div class="form-group">
                      <?php  echo " Hi," . " ". $_SESSION['logged_user_data']['user_name']?>
                      <a href="/UxEstate/logout.php">logout</a>
                        <img class='img-fluid' src="https://better-digital-artist.com/wp-content/uploads/2019/04/picture_nicolas_delille.png"/>
                  </div>
           <!-- login box-->

        </div>
      </li>
    
      

      
      <?php else: ?>
       
        
    <?php endif; ?>
      </ul>
      
      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
</header>

<main role="main">