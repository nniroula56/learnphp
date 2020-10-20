<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <title>Nstudio</title>
</head>



<body>
    
<!-- navigation-start -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 	<!-- Just an image -->
  <a class="navbar-brand" href="#">
    <img src="./images/logo.png" width="50" height="50" alt="" loading="lazy">
  </a>

  <a class="navbar-brand " href="#">nstudio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Web Development</a>
          <a class="dropdown-item" href="#">Android & IOS Development</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Graphic Design</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Team</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Blog</a>
      </li>

      <li class="nav-item">

    <button type="button" class="btn btn-info py-2 m-2">Log In</button>
    <button type="button" class="btn btn-info py-2 m-2">Sign Up</button>

  </div>
</nav>

<!-- navigation-end -->

<!-- carousal-start -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/android.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Android Development</h3>
        <p>We make what you want!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/gd.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Graphic Design</h3>
        <p>We design what you need!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/ios.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>IOS Development</h3>
        <p>We make great IOS applications for you!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/web.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Web Development</h3>
        <p>Web Development is our passion!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- carousal-end -->

<section class="my-5">

<h2 class="text-center">Services</h2>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
