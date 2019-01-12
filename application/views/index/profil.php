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
        <a class="nav-link text-white" href="buat_event.html" id="active">Buat Event</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="statistik.html" id="active">Statistik</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container"><br>
    <h2>Profil Penyelenggara</h2>
    <div class="row">
      <div class="col-md-4" align="center"><br>
        <img alt="Image" style="height:220px; width: 220px; object-fit: cover;" src="img/logo_orma/2.png"><br>
        <div style="border-bottom: 2px solid #482373; margin-right: 60px; margin-left: 60px;" align="right">
          <a href="edit_profil.html">
            <i class="far fa-edit fa-sm"></i> Edit Profil
          </a>
        </div><br>
        <p>Akun Sosial Media kami</p>
        <a class="navbar-brand" href="https://www.facebook.com/" data-placement="bottom" data-toggle="tooltip" title="Facebook" style="color: black;">
          <i class="fab fa-facebook-f fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.twitter.com/" data-placement="bottom" data-toggle="tooltip" title="Twitter" style="color: black;">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.instagram.com/" data-placement="bottom" data-toggle="tooltip" title="Instagram" style="color: black;">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
        <a class="navbar-brand" href="https://www.youtube.com/" data-placement="bottom" data-toggle="tooltip" title="Youtube" style="color: black;">
          <i class="fab fa-youtube fa-lg"></i>
        </a>
        <a class="navbar-brand" href="#" data-toggle="tooltip" data-placement="bottom" title="Website" style="color: black;">
          <i class="fas fa-globe fa-lg"></i>
        </a><br>
      </div>
      <div class="col-md-7"><br>
        <div align="center">
          AMCC merupakan UKM yang bergerak dalam bidang keilmuan. Seketariat AMCC beralamat di Gedung BSC Lantai 2 Universitas Amikom Yogyakarta jalan Ring Road Utara Sleman, Yogyakarta. Sedangkan untuk Camp AMCC beralamat di jalan plosokuning raya No. 88, Minomartani, Ngaglik, Sleman, Yogyakarta. AMCC secara resmi menjadi UKM pada tanggal 6 Mei 1996.
        </div><br><br>
        <label>Nama Penyelenggara :</label>
        <input data-check="{}" class="form-control" type="text" id="id_nama_penyelenggara" name="nama_penyelenggara" value="Amikom Computer Club" style="height: 45px;"><br>
        <label>Kategori Penyelenggara :</label>
        <input data-check="{}" class="form-control" type="text" id="id_kategori_penyelenggara" name="kategori_penyelenggara" value="UKM" style="height: 45px;"><br>
        <label>Email :</label>
        <input data-check="{}" class="form-control" type="text" id="id_email" name="email" value="amcc@gmail.com" style="height: 45px;"><br>
        
      </div>
    </div><br>
  </div>
</div>

<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-4">
        <img class="mb-2" src="img/amikom.png" style="width:45px">
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
        <a class="navbar-brand" href="http://www.amikom.ac.id/" data-toggle="tooltip" title="Website" style="color: white;">
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
