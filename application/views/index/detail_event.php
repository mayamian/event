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
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url('Auth_peserta/home_peserta')?>" id="active">Beranda</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="list_event.html" id="active">Cari Event</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="mt-4 card mb-8">
          <div style="position: relative; display: block; text-align: center; overflow: hidden;">
            <img class="card-img-top text-center img-responsive" alt="Image" style="height:250px; object-fit: cover; display: block; " src="<?php echo base_url('asset/img/event.jpg')?>" data-holder-rendered="true">
            <a href="#" style="position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0; padding: 15px; background-color: rgba(30,30,30,.5); overflow: hidden; opacity: 0; transition: all ease-in-out .25s; color: #fff;"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pl-5">
        <br><h5>Seminar Blockchain 2018</h5>
        <p>by AMCC</p>
        <p>Mulai Dari Rp. 100.000</p>
      </div>
    </div>
    <div class="mt-4 card mb-8">
      <div class="row">
        <div class="col-md-8 my-3">
          <a href="#" class="ml-3">
            <img src="<?php echo base_url('asset/img/draft.png')?>">
          </a>
          <span class="float-right">sold out</span>
        </div>
        <div class="col-md-4 my-2" align="center">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#popup" data-backdrop="static" style="width: 300px;">Daftar</button>
          <!-- Modal -->
          <div class="modal fade" id="popup" role="dialog">
            <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <div class="container">
                    <h4 class="text-center">Daftar</h4>
                  </div>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <p class="float-left">Pendaftaran Acara Berakhir pada 1 Januari 2019</p><br><br>
                  <div class="mw-100 border shadow-sm">
                    <div class="row">
                      <div class="col-md-8">
                        <div style="height: 100%; border-left: 7px solid #482373;">
                          <h5 class="float-left pb-3 mt-2 ml-2">Seminar Blockchain</h5><br><br><br>
                          <p class="float-left mr-3 pb-3 ml-2">Mulai Dari Rp. 100.000</p>
                          <p class="badge badge-pill badge-info float-left mt-1 ml-2" style="background-color: #482373;">30 Tiket Tersisa</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="container mt-2" style="background-color: #482373; height: 25px; border-radius: 5px;">
                          <p class="text-white">Jumlah</p>
                        </div>
                        <br><div class="form-group" style="width: 60px;">
                          <input type="Number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="container">
                    <span class="float-left">Total Pembayaran<code> Rp. 300.000</code></span>
                  </div>
                  <a href="<?php echo base_url('Auth_peserta/konfirmasi_event')?>" class="btn btn-warning" role="button" style="width: 200px;">Pesan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-md-9">
        <h5>Deskripsi Acara</h5>
        <p>Kalian pasti pernah dengar Bitcoin kan ? Mata uang digital yang sangat populer saat ini, faktanya ternyata Bitcoin dibuat di atas platform Blockhain dan teknologi ini salah satu teknologi yang diramalkan akan menjadi trend di tahun 2018 ini. Dengan alasan ini, AMCC mempersembahkan
Topik Seminar :
Membangun DApps pada Platform Blockchain
Deskripsi :
"Seminar ini akan membahas apa itu Blockchain dan bagaimana membangun sebuah aplikasi terdesentralisasi pada platform blockhain"
Pembicara :
Dr. Bambang Purnomosidi D.P
Chief of Academic di Refactory
Waktu Pelaksanaan :
Kamis, 12 April 2018
Pukul 08.00 - 12.00 WIB
Tempat :
Ruang Citra 2, Universitas Amikom Yogyakarta
Biaya Pendaftaran :
Member AMCC : 25K
Non-member : 30K
Umum (Non-Amikom) : 35K
Apa yang didapat ?
*Ilmu, Snack, Sertifikat
*Door prize
Pendaftaran :
23 Maret - 9 April 2018
Online : http://seminar.amcc.or.id
Offline : Stand Seminar didepan Citra 2
Pertanyaan & info :
+ 0857-8656-4030
+ IG : amccamikom
        </p>
      </div>
      <div class="col-md-3">
        <h5>Waktu Acara</h5>
        <p>Kamis, 30 Januari 2019</p><br>
        <h5>Lokasi & Ruang Acara</h5>
        <p>Citra 2</p>
      </div>
    </div><br>
    <p>Kategori Acara</p>
    <hr class="featurette-divider">
    <h5 class="text-center">Profil Penyelenggara</h5>
    <p class="text-center">AMCC merupakan UKM yang bergerak dalam bidang keilmuan. Seketariat AMCC beralamat di Gedung BSC Lantai 2 Universitas Amikom Yogyakarta jalan Ring Road Utara Sleman, Yogyakarta. Sedangkan untuk Camp AMCC beralamat di jalan plosokuning raya No. 88, Minomartani, Ngaglik, Sleman, Yogyakarta. AMCC secara resmi menjadi UKM pada tanggal 6 Mei 1996.</p><br><br><br>
    <div align="center">
      <a class="navbar-brand" href="https://www.facebook.com/" data-toggle="tooltip" title="Facebook" style="color: black;">
        <i class="fab fa-facebook-f fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.twitter.com/" data-toggle="tooltip" title="Twitter" style="color: black;">
        <i class="fab fa-twitter fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.instagram.com/" data-toggle="tooltip" title="Instagram" style="color: black;">
        <i class="fab fa-instagram fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.youtube.com/" data-toggle="tooltip" title="Youtube" style="color: black;">
        <i class="fab fa-youtube fa-lg"></i>
      </a>
      <a class="navbar-brand" href="#" data-toggle="tooltip" title="Website" style="color: black;">
        <i class="fas fa-globe fa-lg"></i>
      </a>
    </div><br>
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
