<nav class="navbar navbar-expand-md  bg-dark navbar-dark">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="img/logo.png" class="navbar-brand" style="width:60px">
      <li class="nav-item ml-3">
        <a class="nav-link" href="#">Browse Event</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container my-4">
  <span>LIVE/DRAFT/PAST</span><br>
  <h4>Event title</h4>
  <span>Room</span><br>
  <span>Time</span>
</div>

<div class="container">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
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
      <form action="/action_page.php">
        <div class="d-flex flex-row">
          <div class="p-2 text-white" style="background-color: blue;">1</div>
          <div class="p-2" style="width: 1100px; border-bottom: 3px solid blue;">Event Details</div>
        </div><br>
        <form role="form" action="<?= base_url('Acara/add_proses')?>" method="post" enctype="multipart/form-data" />
            <div class="box-body">
        <div class="form-group">
          <label for="nama_acara">Nama Acara :</label>
          <input type="text" class="form-control" id="nama_acara" placeholder="Masukkan nama acara" name="nama_acara" value="<?=set_value('nama_acara')?>">
        </div>
        <div class="form-group">
          <label for="jenis_acara">Jenis Acara :</label>
          <select name="jenis_acara_idjenis_acara" class="custom-select">
            <option value="" style="display: none">Jenis Acara</option>
                  <?php foreach($jenis_acara as $l){ ?>
                  <option value="<?php echo $l['idjenis_acara']; ?>"><?php echo $l['jenis_acara']; ?>   </option>
                  <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="kategori_acara">Kategori Acara :</label>
          <select name="kategori_acara_idkategori_acara" class="custom-select">
            <option selected>Custom Select Menu</option>
            <?php foreach($kategori_acara as $l){ ?>
                  <option value="<?php echo $l['idkategori_acara']; ?>"><?php echo $l['kategori_acara']; ?>   </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="tempat">Tempat :</label>
          <input type="text" class="form-control" id="tempat" placeholder="Masukkan tempat acara" name="tempat">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="mulai">Tanggal & waktu dimulai :</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                </div>
                <div class="col-md-6">
                  <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="akhir">Tanggal & waktu berakhir :</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="date" class="form-control" id="tanggal_akhir" placeholder="Enter date" name="tanggal_akhir">
                </div>
                <div class="col-md-6">
                  <input type="time" class="form-control" id="waktu_akhir" placeholder="Enter time" name="waktu_akhir"><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Gambar Acara</label>
        </div>
        <div class="form-group">
          <br><label for="deskripsi">Deskripsi :</label>
          <textarea class="ckeditor" id="ckeditor"></textarea><br>
        </div>
        <div class="d-flex flex-row">
          <div class="p-2 text-white" style="background-color: blue;">2</div>
          <div class="p-2" style="width: 1100px; border-bottom: 3px solid blue;">Buat Tiket</div>
        </div><br>
        <div class="container" style="background-color: gray; height: 45px;">
          <div class="row">
            <div class="col-md-3 text-center p-2">
              <p>Nama Tiket</p>
            </div>
            <div class="col-md-3 text-center p-2">
              <p>Jumlah Tersedia</p>
            </div>
            <div class="col-md-3 text-center p-2">
              <p>Harga Satuan (dalam Rupiah)</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <br><select name="nama_tiket" class="custom-select">
                <option selected>Custom Select Menu</option>
                <option value="free">Free</option>
                <option value="member">Member</option>
                <option value="amikom">Amikom</option>
                <option value="umum">Umum</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <br><div class="form-group">
              <input type="Number" class="form-control" id="jumlah" placeholder="Masukkan jumlah" name="jumlah">
            </div>
          </div>
          <div class="col-md-3">
            <br><div class="form-group">
              <input type="Number" class="form-control" id="harga" placeholder="Masukkan harga" name="harga">
            </div>
          </div>
        </div>
        
      </form>
    </div>
    <div id="design" class="container tab-pane fade card bg-light"><br>
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
    <div id="manage" class="container tab-pane fade card bg-light"><br>
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
</div>


<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-2">
      <img class="mb-2" src="img/logo.png" style="width:60px">
      <small class="d-block mb-3 text-muted">2018</small>
    </div>
    <div class="col-md-10" align="right">
      <a class="navbar-brand" href="https://www.facebook.com/" style="color: black;">
        <i class="fab fa-facebook-f fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.twitter.com/" style="color: black;">
        <i class="fab fa-twitter fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.instagram.com/" style="color: black;">
        <i class="fab fa-instagram fa-lg"></i>
      </a>
      <a class="navbar-brand" href="https://www.youtube.com/" style="color: black;">
        <i class="fab fa-youtube fa-lg"></i>
      </a>
      <a class="navbar-brand" href="#" style="color: black;">
        <i class="fas fa-globe fa-lg"></i>
      </a>
    </div>
  </div>
</div>

