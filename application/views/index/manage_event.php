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
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/home.style.css')?>">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="img/amikom.png" class="navbar-brand" style="width:40px">
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

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container"><br>
    <h2>Manage Event</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#live">
          LIVE <span class="badge badge-primary ml-2">2</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#draft">
          DRAFT <span class="badge badge-primary ml-2">2</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#past">
          PAST <span class="badge badge-primary ml-2">2</span>
        </a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="live" class="container tab-pane active card bg-light"><br>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
      </div>
      <div id="draft" class="container tab-pane fade card bg-light"><br>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
      </div>
      <div id="past" class="container tab-pane fade card bg-light"><br>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.75rem;">
          <h5>Event title</h5>
          <h6>Event time</h6>
          <h6>Event room</h6><br>
          <div class="d-flex">
            <div class="ml-1">
              <a class="navbar-brand" href="#">
                <img src="img/manage.png" alt="manage">
              </a>
              Manage
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/edit.png" alt="edit">
              </a>
              Edit
            </div>
            <div class="ml-5">
              <a class="navbar-brand" href="#">
                <img src="img/view.png" alt="view">
              </a>
              View
            </div>
          </div><br>
        </div>
      </div>
    </div><br>
  </div>
</div>

<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-2">
        <img class="mb-2" src="img/amikom.png" style="width:45px">
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
        <a class="navbar-brand" href="https://amikom.ac.id/" style="color: white;">
          <i class="fas fa-globe fa-lg"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
