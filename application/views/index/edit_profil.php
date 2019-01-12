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
  <link rel="stylesheet" type="text/css" href="css/navbar.style.css">
</head>
<body>

<nav class="navbar navbar-expand-md" style="background-color: #482373;">
  <div class="container">
    <!-- Links -->
    <ul class="navbar-nav" align="left">
      <!-- Brand/logo -->
      <img src="img/amikom.png" class="navbar-brand" style="width:40px">
      <li class="nav-item ml-3">
        <a class="nav-link text-white" href="home_penyelenggara.html" id="active">Beranda</a>
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
  <div class="container">
    <div align="center">
      <img class="mb-4 mt-4" src="img/amikom.png" style="width:60px">
      <h3>Penyelenggara</h3>
    </div><br>
    <div class="container col-md-6 text-left mt-4 pb-4" align="center">
      <form action="/action_page.php">
        <div class="d-flex flex-row">
          <div class="p-2 text-white" style="background-color: #482373;">1</div>
          <div class="p-2" style="width: 1100px; border-bottom: 3px solid #482373;">Data Penyelenggara</div>
        </div><br>
        <div class="form-group">
          <label for="nama_penyelenggara">Nama Penyelenggara :</label>
          <input type="text" class="form-control" id="nama_penyelenggara" placeholder="Masukkan nama penyelenggara" name="nama_penyelenggara">
        </div>
        <div class="form-group">
          <label for="kategori_penyelenggara">Kategori Penyelenggara :</label>
          <select name="kategori_penyelenggara" class="custom-select">
            <option selected>- Pilih Kategori -</option>
            <option value="ukm">UKM</option>
            <option value="bso">BSO</option>
            <option value="lembaga">Lembaga</option>
            <option value="komunitas">Komunitas</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input data-check="{}" class="form-control" type="text" id="id_email" name="email" value="amcc@gmail.com">
        </div>
        <div class="form-group">
          <label for="pwd">Password :</label>
          <input data-check="{}" class="form-control" type="text" id="id_pwd" name="pwd" value="Amccamikom2019">
        </div>
        <div class="custom-file mt-2" style="margin-bottom: 35px;">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Logo Penyelenggara</label>
          <p class="text-muted" style="font-size: 15px;"><i>ukuran tinggi dan lebar gambar maksimal 220 pixels</i></p>
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi :</label>
          <textarea class="form-control" rows="5" id="deskripsi"></textarea>
        </div>
        <div class="form-group">
          <label for="facebook_url">Facebook Url :</label>
          <input type="text" class="form-control" id="facebook_url" placeholder="Masukkan url facebook" name="facebook_url">
        </div>
        <div class="form-group">
          <label for="twitter_url">Twitter Url :</label>
          <input type="text" class="form-control" id="twitter_url" placeholder="Masukkan url twitter" name="twitter_url">
        </div>
        <div class="form-group">
          <label for="instagram_url">Instagram Url :</label>
          <input type="text" class="form-control" id="instagram_url" placeholder="Masukkan url instagram" name="instagram_url">
        </div>
        <div class="form-group">
          <label for="youtube_url">Youtube Url :</label>
          <input type="text" class="form-control" id="youtube_url" placeholder="Masukkan url youtube" name="youtube_url">
        </div>
        <div class="form-group">
          <label for="web_url">Web Url :</label>
          <input type="text" class="form-control" id="web_url" placeholder="Masukkan url web" name="web_url">
        </div>
        <div class="custom-control custom-checkbox py-1 mb-2">
          <input type="checkbox" class="custom-control-input" id="customCheck" name="ingatkan">
          <label class="custom-control-label" for="customCheck">Ingatkan saya</label>
        </div>
        <button type="submit" class="btn btn-warning">Daftar</button>
      </form><br>
    </div>
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
