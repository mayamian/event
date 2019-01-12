<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Amikom</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/home.style.css')?>">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="<?php echo base_url('asset/img/amikom.png')?>" class="navbar-brand" style="width:40px; height: 40px">
      <li class="nav-item ml-3">
        <div class="dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="active" data-toggle="dropdown">Pendaftaran </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url('Auth_peserta/register')?>">Pendaftaran Peserta</a>
            <a class="dropdown-item" href="<?php echo base_url('Auth_penyelenggara/log_penyelenggara')?>">Pendaftaran Penyelenggara</a>
          </div>
        </div>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url('statistik')?>" id="active">Statistik</a>
      </li>
    </ul>
    <div class="col-md-4" align="right">
      <a href="<?php echo base_url('Auth_penyelenggara/log_penyelenggara')?>" type="button" class="btn btn-warning mx-2" title="Klik tombol ini" data-toggle="popover" data-trigger="hover" data-content="untuk Penyelenggara" data-placement="bottom">Login/Daftar</a>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators" style="margin-bottom: 70px;">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('asset/img/carousel1.jpg')?>" alt="Gambar 1" width="1100" height="500">
      <div style="position: absolute;
                  right: 5%;
                  bottom: 150px;
                  left: 5%;
                  z-index: 10;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  color: #fff;
                  text-align: center;">
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <h1 style="font-family: Adobe Heiti Std R;">Lakukan Lebih Dengan hal yang Kamu Suka Di Event Amikom</h1><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('asset/img/carousel2.jpg')?>" alt="Gambar 2" width="1100" height="500">
      <div style="position: absolute;
                  right: 5%;
                  bottom: 150px;
                  left: 5%;
                  z-index: 10;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  color: #fff;
                  text-align: center;">
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <h1 style="font-family: Adobe Heiti Std R;">Buat Event Anda jadi Lebih Dikenal</h1><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('asset/img/carousel3.jpg')?>" alt="Gambar 3" width="1100" height="500">
      <div style="position: absolute;
                  right: 5%;
                  bottom: 100px;
                  left: 5%;
                  z-index: 10;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  color: #fff;
                  text-align: center;">
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <h1 style="font-family: Adobe Heiti Std R;">Temukan berbagai Macam Event Menarik lainnya Di Event Amikom</h1><br>
        <!-- <button type="button" class="btn btn-outline-warning text-center" style="width: 150px; height: 50px; font-size: 20px;">Find Now</button> -->
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container-fluid" style="display: flex; justify-content: center; position: relative; bottom: 53px;">
  <div style="margin-right: 55px;">
    <a href="#menu">
      <img src="<?php echo base_url('asset/img/menu.png')?>" style="width: 80px;">
    </a>
    <p style="font-family: Adobe Heiti Std R; color: #482373;" align="center">Menu</p>
  </div>
  <div style="margin-left: 55px;">
    <a href="#footer">
      <img src="<?php echo base_url('asset/img/footer.png')?>" style="width: 80px;">
    </a>
    <p style="font-family: Adobe Heiti Std R; color: #482373;" align="center">Footer</p>
  </div>
</div>

<div class="container-fluid" style="background-color: #F8F8F8;">
<!-- Modal -->
<div class="modal fade" id="popup" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="container">
          <h4 class="text-center">Perhatian  <i class="fas fa-exclamation fa-sm"></i></h4>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="float-left">Klik tombol <code>login/daftar</code> untuk dapat melakukan pendaftaran event.</p><br><br>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url('Auth_peserta/register') ?>" class="btn btn-warning" role="button" style="width: 200px;">Login/Daftar</a>
      </div>
    </div>
  </div>
</div>

  <div class="container" id="menu"><br>
    <h3 class="text-center"><b>Tentang Event Amikom</b></h3><br>
    <div class="row">
      <div class="col-md-6">
        <h5><b>Apa itu Event Amikom ?</b></h5>
        <p>Kami membantu Lembaga, UKM, Orma, BSO dan Komunitas Amikom untuk memasarkan event dengan mudah dan cepat. Kami percaya dapat sangat membantu kamu sebagai penyelenggara event untuk mencarikan peserta eventmu setiap harinya.</p>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Penyelenggara</footer>
        </blockquote>
        <p>Kami membantu anda menemukan event - event yang ada di Amikom sesuai dengan kebutuhan anda. dengan menyajikan berbagai info event di kampus dalam satu wadah tentunya sangat memudahkan Anda dalam menemukan event yang diinginkan</p>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Peserta</footer>
        </blockquote>
      </div>
      <div class="col-md-6">
        <h5><b>Kenapa Event Amikom ?</b></h5>
        <p>Cara mudah untuk memasarkan Eventmu dengan gratis. Cukup daftar sebagai penyelenggara lalu tambahkan event dan terima peserta tanpa pemotongan biaya. Event Amikom percaya akan dengan membantu Lembaga, UKM, Orma, BSO dan Komunitas Amikom itu berarti membangun pasar yang sangat besar di Amikom khususnya maupun disekitarnya</p>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Penyelenggara</footer>
        </blockquote>
        <p>Cara mudah untuk menemukan event yang anda cari dengan penggolongan event kedalam berbagai kategori, serta penyediaan E-ticket dan E-sertificate dalam pendaftaran setiap event yang anda pilih tentunya sangat memudahkan pihak penyelenggara sekaligus dapat memotong biaya acara dan memperlancar proses pelaksanaan event tersebut</p>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Peserta</footer>
        </blockquote>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-md-6">
        <h3>Sangat Membantu Kami Dalam Pemasaran, Tanpa Harus Ini Itu, Cukup Event Amikom, Gratis Lagi</h3>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Penyelenggara</footer>
        </blockquote>
        <h3>Sangat Membantu Kami Dalam Menemukan Event, Tidak Perlu Repot - Repot Cari Info, Semuanya Sudah Lengkap Di Event Amikom</h3>
        <blockquote class="blockquote">
          <footer class="blockquote-footer">dari segi Peserta</footer>
        </blockquote>
      </div>
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <video class="embed-responsive-item" controls>
            <source src="<?php echo base_url('asset/video/video.mp4')?>" type="video/mp4">
          </video>
        </div>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-md-5">
        <h5>Cari berdasarkan Kategori <b>Event Terdekat</b></h5>
      </div>
      <div class="col-md-7 d-flex justify-content-end">
        <div class="row">
          <div class="col-md-3">
            <h5 >Urutkan</h5>
          </div>
          <div class="col-md-9 pb-3">
            <div class="form-group">
              <select name="kategori_event" class="custom-select">
                <option selected>All</option>
                <option value="Sains & Teknologi">Sains & Teknologi</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Travel & Outdoor">Travel & Outdoor</option>
                <option value="Kerohanian">Kerohanian</option>
                <option value="Seni">Seni</option>
                <option value="Musik">Musik</option>
                <option value="Food & Drink">Food & Drink</option>
                <option value="Film, Media & Entertainment">Film, Media & Entertainment</option>
                <option value="Fashion & Beauty">Fashion & Beauty</option>
                <option value="Community & Culture">Community & Culture</option>
                <option value="Charity & Causes">Charity & Causes</option>
                <option value="Business & Profesional">Business & Profesional</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <!-- <div style="position: relative; display: block; text-align: center; overflow: hidden;">
            <img class="img-responsive" style="height:100%; object-fit: cover; width: 100%; min-height: 150px; max-height: 150px;" src="event.jpg" alt="Image">
            <a href="#" style="position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0; padding: 15px; background-color: rgba(30,30,30,.5); overflow: hidden; opacity: 0; transition: all ease-in-out .25s; color: #fff;"></a>
            <div style="width: 80%;
              padding: 5px 0;
              position: absolute;
              bottom: 10px;
              border-radius: 20px;
              left: 50%;
              font-family: arial;
              transform: translate(-50%);
              background-color: #189dae;
              color: #fff;
              z-index: 11;
              font-size: 12px;">
              <span><strong>From RP. 100.000,00</strong></span>
            </div>
          </div> -->
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <div style="position: relative; display: block; text-align: center; overflow: hidden;">
            <img class="card-img-top text-center img-responsive" alt="Image" style="height:100%; object-fit: cover; width: 100%; min-height: 150px; max-height: 150px; display: block; " src="<?php echo base_url('asset/img/event.jpg')?>" data-holder-rendered="true">
            <!-- <a href="#" style="position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0; padding: 15px; background-color: rgba(30,30,30,.5); overflow: hidden; opacity: 0; transition: all ease-in-out .25s; color: #fff;"></a> -->
          </div>
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
            <!-- <div class="d-flex justify-content-center align-items-center">
              <button type="button" class="btn btn-sm btn-outline-secondary">Price</button>
            </div> -->
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
    </div>
    <br>
    <h4 class="text-center">Terakhir Ditambahkan</h4><br>
    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 shadow-sm">
          <a href="#" data-toggle="modal" data-target="#popup" data-backdrop="static" style="color: black; text-decoration:none">
          <img class="card-img-top text-center" alt="Image" style="height:150px; display: block;" src="<?php echo base_url('asset/img/contoh-gambar.jpg')?>" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text text-center"><b>Seminar Blockchain 2018</b></p>
            <p class="card-text">Kamis,10 Oktober 2019</p>
            <p class="card-text">Unit 4 lt 3 ruang 1</p>
            <p class="card-text">Rp. 100.000</p>
          </div>
          </a>
        </div>
      </div>
    </div>
    <br>
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
  $('[data-toggle="popover"]').popover();   
});
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
