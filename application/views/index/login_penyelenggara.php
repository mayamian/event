<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eventikom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/home.style.cairo_surface_status(surface)')?>">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="<?php echo base_url('asset/img/amikom.png')?>" class="navbar-brand" style="width:40px; height: 40px">
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="#" id="active">Browse Event</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="#" id="active">Menu</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="#" id="active">Menu</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="#" id="active">Menu</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid text-center" style="background-color: #F8F8F8;">
  <img class="mb-4 mt-4" src="<?php echo base_url('asset/img/amikom.png')?>" style="width:60px">
  <h3>Login Penyelenggara</h3>
  <div class="container col-md-6 text-left mt-4 pb-4" align="center">
   
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="login" class="container tab-pane active card bg-light"><br>
       <form action="<?php echo base_url('Auth_penyelenggara/proses_login') ?>" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email_log" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password">
          </div>
          <div class="custom-control custom-checkbox py-1 mb-2">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
            <label class="custom-control-label" for="customCheck">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form><br>
      </div>
      
        </form><br>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-2">
        <img class="mb-2" src="<?php echo base_url('asset/img/amikom.png')?>" style="width:45px">
        <small class="d-block mb-3 text-white">2018</small>
      </div>
      <div class="col-md-10" align="right">
        <a class="navbar-brand" href="https://www.facebook.com/" style="color: white;">
          <i class="fab fa-facebook-f fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.twitter.com/" style="color: white;">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.instagram.com/" style="color: white;">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.youtube.com/" style="color: white;">
          <i class="fab fa-youtube fa-lg"></i>
        </a>
        <a class="navbar-brand" href="http://amikom.ac.id/" style="color: white;">
          <i class="fas fa-globe fa-lg"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
