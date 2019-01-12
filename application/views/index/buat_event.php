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
  <script type="text/javascript" src="<?= base_url('asset/ckeditor/ckeditor.js')?>"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#harga').maskMoney();
    });
    </script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/navbar.style.css">
  <script>
    function validasi() {
    var x = document.forms["form_event"]["nama_acara","penyelenggara_id_penyelenggara","jenis_acara_idjenis_acara","kategori_acara_idkategori_acara","tempat_id_tempat","tanggal_mulai","waktu_mulai","tanggal_akhir","waktu_akhir","kouta_peserta","harga","gambar","deskripsi"].value;
    if (x == "") {
      alert("Data Harus Diisi Lengkap");
      return false;
  }
}
  </script>
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="<?= base_url('asset/img/amikom.png')?>" class="navbar-brand" style="width:40px; height:40px">
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url('Auth_penyelenggara/index')?>" id="active">Beranda</a>
      </li>
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="<?php echo base_url ('asset/statistik')?>" id="active">Statistik</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="background-color: #F8F8F8;">
  <div class="container"><br>
    <span>LIVE/PAST</span><br>
    <h4>Seminar Blockchain 2018</h4>
    <span>Citra 2</span><br>
    <span>Kamis, 30 Januari 2019</span>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs mt-4" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#edit">EDIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#design">DESIGN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#manage">MANAGE</a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="edit" class="container tab-pane active card bg-light"><br>
          <div class="d-flex flex-row">
            <div class="p-2 text-white" style="background-color: blue;">1</div>
            <div class="p-2" style="width: 1100px; border-bottom: 3px solid blue;">Event Details</div>
          </div><br>
          <?php echo validation_errors(); ?>
          <form role="form" name="form_event" action="<?= base_url('Acara/add_proses')?>" method="post" enctype="multipart/form-data" onsubmit="return validasi()" />
          <div class="box-body">
          <div class="form-group">
            <label for="nama_acara">Nama Acara :</label>
            <input type="text" class="form-control" id="nama_acara" placeholder="Masukkan nama acara" name="nama_acara" value="<?= set_value('nama_acara')?>">
          </div>
          <div class="form-group">
            <label for="penyelenggara_id_penyelenggara">Penyelenggara :</label>
              <select name="penyelenggara_id_penyelenggara" class="custom-select">
              <option value="" style="display: none">Pilih Penyelenggara</option>
                <?php foreach($penyelenggara as $l){ ?>
                  <option value="<?php echo $l['id_penyelenggara']; ?>"><?php echo $l['nama_penyelenggara']; ?>   </option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jenis_acara_idjenis_acara">Jenis Acara :</label>
              <select name="jenis_acara_idjenis_acara" class="custom-select">
              <option value="" style="display: none">Pilih Jenis Acara</option>
                <?php foreach($jenis_acara as $l){ ?>
                  <option value="<?php echo $l['idjenis_acara']; ?>"><?php echo $l['jenis_acara']; ?>   </option>
                <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="kategori_acara_idkategori_acara">Kategori Acara :</label>
            <select name="kategori_acara_idkategori_acara" class="custom-select">
              <option selected>Pilih Kategori Acara</option>
              <?php foreach($kategori_acara as $l){ ?>
                <option value="<?php echo $l['idkategori_acara']; ?>"><?php echo $l['kategori_acara']; ?>   </option>
              <?php } ?>
            </select>
          </div>
           <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="tempat">Tempat & Ruang</label>
                <div class="row">
                  <div class="col-md-6">
                    <select name="tempat_id_tempat)" class="custom-select">
                    <option selected>Pilih Tempat</option>
                    <?php foreach($tempat as $l){ ?>
                      <option value="<?php echo $l['id_tempat']; ?>"><?php echo $l['nama_tempat']; ?>   </option>
                    <?php } ?>
                  </select>
                  </div>
                  <div class="col-md-6">
                    <select name="tempat_id_tempat" class="custom-select">
                    <option selected>Pilih Ruang</option>
                    <?php foreach($tempat as $l){ ?>
                      <option value="<?php echo $l['id_tempat']; ?>"><?php echo $l['ruang']; ?>   </option>
                    <?php } ?>
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div><br>
          <!-- <div class="form-group">
            <label for="tempat">Tempat :</label>
            <input type="text" class="form-control" id="tempat" placeholder="Masukkan tempat acara" name="tempat">
          </div> -->
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="mulai">Tanggal & waktu dimulai :</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai value="<?= set_value('tanggal_mulai')?>"">
                  </div>
                  <div class="col-md-6">
                    <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="<?= set_value('waktu_mulai')?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="akhir">Tanggal & waktu berakhir :</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="date" class="form-control" id="tanggal_akhir" placeholder="Enter date" name="tanggal_akhir" value="<?= set_value('tanggal_akhir')?>">
                  </div>
                  <div class="col-md-6">
                    <input type="time" class="form-control" id="waktu_akhir" placeholder="Enter time" name="waktu_akhir" value="<?= set_value('waktu_akhir')?>"><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="kouta">Kouta Peserta & Harga Tiket</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="kouta_peserta" placeholder="Masukkan Kouta Peserta" name="kouta_peserta" value="<?= set_value('kouta_peserta')?>">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Tiket" name="harga" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal="," value="<?= set_value('harga')?>">
                  </div>
                </div>
              </div>
            </div>
          </div><br>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="gambar" value="<?= set_value('gambar')?>" width="100px"heigh />
            <label class="custom-file-label" for="customFile">Gambar Acara</label>
          </div>
          <div class="form-group">
            <br><label for="deskripsi">Deskripsi :</label>
            <textarea class="ckeditor" id="ckeditor" name="deskripsi" value="<?=set_value('deskripsi')?>"></textarea><br>
          </div>
          <input type="submit" class="btn btn-success" value="submit">
          </div>
          <br>
        </form>
      </div>
      <br>
      <div id="design" class="container tab-pane fade card bg-light"><br>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="mt-4 card mb-8">
                <div style="position: relative; display: block; text-align: center; overflow: hidden;">
                  <img class="card-img-top text-center img-responsive" alt="Image" style="height:250px; object-fit: cover; display: block; " src="<?= base_url('asset/img/event.jpg')?>" data-holder-rendered="true">
                  <a href="#" style="position: absolute; z-index: 10; top: 0; bottom: 0; left: 0; right: 0; padding: 15px; background-color: rgba(30,30,30,.5); overflow: hidden; opacity: 0; transition: all ease-in-out .25s; color: #fff;"></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 pl-5">
              <?php 
              foreach ($list_acara as $row){
             ?>
              <br><h5><?php echo $row['nama_acara']; ?></h5>
              <?php } ?> 
              <p>AMCC</p>
              <p>Mulai Dari Rp. 100.000</p>
            </div>
          </div>
          <div class="mt-4 card mb-8">
            <div class="row">
              <div class="col-md-8 my-3">
                <a href="#" class="ml-3" data-toggle="tooltip" title="Tambah ke event Disukai">
                  <i class="fas fa-thumbs-up fa-2x" style="color: grey;"></i>
                </a>
                <span class="float-right mr-3">sold out</span>
              </div>
              <div class="col-md-4 my-2" align="center">
                <button type="button" class="btn" style="width: 150px;">Daftar</button>
              </div>
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row">
            <div class="col-md-9">
              <h5>Deskripsi Event</h5>
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
              <h5>Waktu</h5>
              <p>Kamis, 30 Januari 2019</p><br>
              <h5>Tempat</h5>
              <p>Citra 2</p>
            </div>
          </div><br>
          <p>Kategori Event</p>
          <hr class="featurette-divider">
          <h5 class="text-center">Profil Penyelenggara</h5>
          <p class="text-center">AMCC merupakan UKM yang bergerak dalam bidang keilmuan. Seketariat AMCC beralamat di Gedung BSC Lantai 2 Universitas Amikom Yogyakarta jalan Ring Road Utara Sleman, Yogyakarta. Sedangkan untuk Camp AMCC beralamat di jalan plosokuning raya No. 88, Minomartani, Ngaglik, Sleman, Yogyakarta. AMCC secara resmi menjadi UKM pada tanggal 6 Mei 1996.</p>
          <div align="center">
            <button type="button" class="btn btn-outline-secondary" style="width: 150px;">Ikuti</button>
          </div><br><br><br>
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
          </div>
        </div><br>
      </div>
      <div id="manage" class="container tab-pane fade card bg-light"><br>
        <div class="container mb-3 pt-2" style="background-color: white; border-radius: 0.50rem;">
          <h5>Seminar Blockchain 2018</h5>
          <h6>Kamis, 1 Januari 2019</h6>
          <h6>Amikom, Gedung Unit 6 lt 3 ruang 1</h6><br>
          <a href="buat_event.html" style="color: black; text-decoration:none;">
            <img src="<?= base_url('asset/img/tinjau.png')?>" alt="Tinjau" class="pb-1 pr-2">Tinjau
          </a><br><br>
        </div>
      </div><br>
    </div>
  </div>
</div>

<div class="container-fluid" id="footer" style="background-color: #482373;">
  <div class="container"><br>
    <div class="row">
      <div class="col-md-4">
        <img class="mb-2" src="<?= base_url('asset/img/amikom.png')?>" style="width:45px">
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
