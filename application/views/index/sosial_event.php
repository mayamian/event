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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url ('asset/css/navbar.style.css')?>">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="img/amikom.png" class="navbar-brand" style="width:40px">
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url ('asset/home_penyelenggara')?>" id="active">Beranda</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url ('asset/Acara/add')?>" id="active">Buat Event</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url ('asset/statistik')?>" id="active">Statistik</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container"><br>
    <div class="border shadow-sm py-2 sticky-top" style="background-color: white;">
      <div class="row">
        <div class="col-md-1">
          <img class="ml-3" alt="Image" src="<?php echo base_url ('asset/img/user.jpg')?>" style="height: 65px; width: 65px; object-fit: cover; border-radius: 100px;">
          <!-- <i class="fas fa-user-circle fa-4x ml-3"></i> -->
        </div>
        <div class="col-md-4">
          <h4 class="ml-3">Rahmat Kurniawan</h4>
          <div class="ml-3">
            <span class="text-muted"><span class="badge badge-secondary">2</span> e-tickets mendatang </span><img src="img/titik.png" style="width: 3px; margin-bottom: 3px;">
            <span class="text-muted"><span class="badge badge-secondary">2</span> disukai </span><img src="img/titik.png" style="width: 3px; margin-bottom: 3px;">
            <span class="text-muted"><span class="badge badge-secondary">2</span> diikuti</span>
          </div>
        </div>
      </div>
    </div><br>
    <h4>E-Tickets</h4>
    <h5 class="ml-5">E-Tickets Mendatang</h5><br>
    <div class="ml-5" align="center">
      <img src="<?php echo base_url ('asset/img/search.png')?>" style="width: 50px;"><br><br>
      <p style="font-family: Adobe Heiti Std R;">Tidak ada tiket mendatang</p>
    </div>
    <div class="border shadow-sm ml-5">
      <div class="row">
        <div class="col-md-3 px-4 py-2">
          <img class="card-img-top text-center img-responsive" alt="Image" style="height:100%; object-fit: cover; width: 100%; min-height: 130px; max-height: 130px; display: block; " src="img/event.jpg" data-holder-rendered="true">
          <div style="width: 80px; height: 36px; text-align: center; padding-top: 5px; border-radius: 4px;background-color: #fff; position: absolute; top: 20px;right: 10px; -webkit-box-shadow: 0 4px 15px 0 rgba(40,44,53,.06), 0 2px 2px 0 rgba(40,44,53,.08); box-shadow: 0 4px 10px 0 rgba(40,44,53,.06), 0 2px 2px 0 rgba(40,44,53,.08); z-index: 3;">
            1 tiket
          </div>
        </div>
        <div class="col-md-8 mt-2 ml-2 text-left">
          <h5>Seminar Blockchain 2018</h5>
          <span class="text-muted">Kamis, 1 Januari 2019</span><br>
          <span class="text-muted">Amikom, Gedung Unit 6 lt 3 ruang 1</span><br><br>
          <span class="text-muted">mulai dari Rp. 125.000</span>
        </div>
      </div>
    </div><br>
    <h5 class="ml-5">E-Tickets Berlalu</h5><br>
    <div class="ml-5" align="center">
      <img src="<?php echo base_url ('asset/img/search.png')?>" style="width: 50px;"><br><br>
      <p style="font-family: Adobe Heiti Std R;">Tidak ada tiket berlalu</p>
    </div>
    <div class="border shadow-sm ml-5">
      <div class="row">
        <div class="col-md-3 px-4 py-2">
          <img class="card-img-top text-center img-responsive" alt="Image" style="height:100%; object-fit: cover; width: 100%; min-height: 130px; max-height: 130px; display: block; " src="<?php echo base_url ('asset/img/event.jpg')?>" data-holder-rendered="true">
          <div style="width: 80px; height: 36px; text-align: center; padding-top: 5px; border-radius: 4px;background-color: #fff; position: absolute; top: 20px;right: 10px; -webkit-box-shadow: 0 4px 15px 0 rgba(40,44,53,.06), 0 2px 2px 0 rgba(40,44,53,.08); box-shadow: 0 4px 10px 0 rgba(40,44,53,.06), 0 2px 2px 0 rgba(40,44,53,.08); z-index: 3;">
            1 tiket
          </div>
        </div>
        <div class="col-md-8 mt-2 ml-2 text-left">
          <h5>Seminar Blockchain 2018</h5>
          <span class="text-muted">Kamis, 1 Januari 2019</span><br>
          <span class="text-muted">Amikom, Gedung Unit 6 lt 3 ruang 1</span><br><br>
          <span class="text-muted">mulai dari Rp. 125.000</span>
        </div>
      </div>
    </div><br>
    <h4>Disukai</h4><br>
    <div class="ml-5" align="center">
      <img src="img/search.png" style="width: 50px;"><br><br>
      <p style="font-family: Adobe Heiti Std R;">Tidak ada event disukai</p>
    </div>
    <div class="border shadow-sm ml-5">
      <div class="row">
        <div class="col-md-3 px-4 py-2">
          <a href="detail_event.html">
            <img class="card-img-top text-center img-responsive" alt="Image" style="height:100%; object-fit: cover; width: 100%; min-height: 130px; max-height: 130px; display: block; " src="<?php echo base_url ('asset/img/event.jpg')?>" data-holder-rendered="true">
          </a>
        </div>
        <div class="col-md-7 mt-2 ml-2 text-left">
          <h5>Seminar Blockchain 2018</h5>
          <span class="text-muted">Kamis, 1 Januari 2019</span><br>
          <span class="text-muted">Amikom, Gedung Unit 6 lt 3 ruang 1</span><br><br>
          <span class="text-muted">mulai dari Rp. 125.000</span>
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-light mt-5" data-toggle="tooltip" title="Hapus dari event Disukai">
            <i class="fas fa-thumbs-down fa-2x" style="color: #482373;"></i>
          </button>
        </div>
      </div>
    </div><br>
    <h4>Diikuti</h4><br>
    <div class="ml-5" align="center">
      <img src="<?php echo base_url ('asset/img/search.png')?>" style="width: 50px;"><br><br>
      <p style="font-family: Adobe Heiti Std R;">Tidak ada penyelenggara yang diikuti</p>
    </div>
    <div class="row ml-5">
      <div class="col-md-5 mr-5 my-2">
        <div class="row">
          <div class="col-md-2">
            <i class="fas fa-user-circle fa-3x"></i>
          </div>
          <div class="col-md-6">
            <h5 class="ml-2">Teater Manggar</h5>
            <a href="list_event.html" class="ml-2">lihat event</a>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-outline-secondary mt-1" style="height: 37px;">Berhenti Mengikuti</button>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-5 my-2">
        <div class="row">
          <div class="col-md-2">
            <i class="fas fa-user-circle fa-3x"></i>
          </div>
          <div class="col-md-6">
            <h5 class="ml-2">Teater Manggar</h5>
            <a href="<?php echo base_url ('asset/list_event')?>" class="ml-2">lihat event</a>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-outline-secondary mt-1" style="height: 37px;">Berhenti Mengikuti</button>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-5 my-2">
        <div class="row">
          <div class="col-md-2">
            <i class="fas fa-user-circle fa-3x"></i>
          </div>
          <div class="col-md-6">
            <h5 class="ml-2">Teater Manggar</h5>
            <a href="<?php echo base_url ('asset/list_event')?>" class="ml-2">lihat event</a>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-outline-secondary mt-1" style="height: 37px;">Berhenti Mengikuti</button>
          </div>
        </div>
      </div>
    </div><br>
        
  </div>
</div>

<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-4">
        <img class="mb-2" src="<?php echo base_url ('asset/img/amikom.png')?>" style="width:45px">
        <small class="d-block mb-3 text-white">Event Amikom</small><br>
      </div>
      <div class="col-md-4 text-white" align="center">
        <small>Copyright © 2019</small><br>
        <small>Direktorat Kemahasiswaan Universitas AMIKOM Yogyakarta</small><br>
        <small>All Right Reserved</small>
      </div>
      <div class="col-md-4" align="right">
        <a class="navbar-brand" href="https://www.facebook.com/amikomjogja/" data-toggle="tooltip" title="Facebook" style="color: white;">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="navbar-brand" href="https://twitter.com/amikomjogja?lang=en" data-toggle="tooltip" title="Twitter" style="color: white;">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="navbar-brand" href="https://www.instagram.com/amikomjogja/" data-toggle="tooltip" title="Instagram"style="color: white;">
          <i class="fab fa-instagram"></i>
        </a>
        <a class="navbar-brand" href="https://www.youtube.com/channel/UCNMwEZ8Y3JIod-d22o8yxZQ" data-toggle="tooltip" title="Youtube" style="color: white;">
          <i class="fab fa-youtube"></i>
        </a>
        <a class="navbar-brand" href="http://amikom.ac.id/" data-toggle="tooltip" title="Website" style="color: white;">
          <i class="fas fa-globe"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
