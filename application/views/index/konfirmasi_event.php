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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/home.style.css')?>">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="<?php echo base_url('asset/img/amikom.png')?>" class="navbar-brand" style="width:40px; height:40px">
    </ul>
  </div>
</nav>

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-8" style="margin-top: 90px;">
        <h2>Seminar Blockchain 2018</h2>
        <h5>AMCC</h5>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div style="position: relative; display: block; text-align: center; overflow: hidden;">
            <img class="card-img-top text-center img-responsive" alt="Image" style="height:170px; object-fit: cover; display: block; " src="<?php echo base_url('asset/img/event.jpg')?>" data-holder-rendered="true">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="border shadow-sm mt-3 rounded">
          <p class="bg-white pb-2 pl-2">Ringkasan Pemesanan</p>
          <div class="row">
            <div class="col-md-8">
              <p class="text-muted ml-4">Id tiket</p>
              <p class="ml-2">82173827389</p>
            </div>
            <div class="col-md-4">
              <p class="text-muted ml-4">Jumlah Pesan</p>
              <p class="ml-5">1</p>
            </div>
          </div><br>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border shadow-sm mt-3">
          <p class="bg-white pb-2 pl-2">Kapan & Dimana</p>
          <p class="ml-2">Kamis, 1 Januari 2019</p>
          <p class="ml-2">Amikom, Gedung Unit 6 lt 3 ruang 1</p><br>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-8">
        <div class="border shadow-sm mt-3">
          <p class="bg-white pb-2 pl-2">Informasi Pendaftaran</p>
          <p align="right" style="color: red; margin-right: 10px;">*kolom yang harus diisi</p>
          <p class="ml-2"><b>Informasi Anda</b></p>
          <form action="/action_page.php">
            <div class="form-group mx-2">
              <label for="email">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>
            <div class="form-group mx-2">
              <label for="pwd">Password :</label>
              <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="pswd">
            </div>
            <button type="submit" class="btn btn-warning ml-2">Konfirmasi</button>
          </form><br>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border shadow-sm mt-3">
          <p class="bg-white pb-2 pl-2">Penyelenggara</p>
          <p class="ml-2">AMCC</p>
          <p class="ml-2">AMCC merupakan UKM yang bergerak dalam bidang keilmuan. Seketariat AMCC beralamat di Gedung BSC Lantai 2 Universitas Amikom Yogyakarta jalan Ring Road Utara Sleman, Yogyakarta. Sedangkan untuk Camp AMCC beralamat di jalan plosokuning raya No. 88, Minomartani, Ngaglik, Sleman, Yogyakarta. AMCC secara resmi menjadi UKM pada tanggal 6 Mei 1996</p><hr>
          <a href="#" class="ml-2">View Organizer Profile</a>
        </div><br>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-4">
        <img class="mb-2" src="<?php echo base_url('asset/img/amikom.png')?>" style="width:45px">
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
