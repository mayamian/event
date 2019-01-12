 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Event Universitas AMIKOM Yogyakarta</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- isi disini -->
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Peserta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <form method="post" action="<?php echo base_url('Peserta/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>No</label>
                  <input type="text" name="id_peserta" class="form-control" id="id_peserta" placeholder="Masukkan Id Peserta" value="<?php echo !empty($peserta->id_peserta)? $peserta->id_peserta: set_value('id_peserta'); ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nomor Induk Mahasiswa" value="<?php echo !empty($peserta->nim)? $peserta->nim: set_value('nim');?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?php echo !empty($peserta->nama)? $peserta->nama: set_value('nama'); ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan Nomor Telp" value="<?php echo !empty($peserta->no_telp)? $peserta->no_telp: set_value('no_telp') ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?php echo !empty($peserta->email)? $peserta->email: set_value('email'); ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="<?php echo !empty($peserta->username)? $peserta->username: set_value('username'); ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" value="<?php echo !empty($peserta->password)? $peserta->password: set_value('password'); ?>">
                  <?php echo form_error(); ?>
                </div>

                <div class="form-group">
                  <label>Kategori Peserta</label>
                  <select class="form-control" name="kategori_peserta">
                  <option value="" style="display: none"></option>
                  <?php foreach($kategori_penserta as $l){ ?>
                  <option <?php if ($peserta->kategori_peserta == $l['kategori_peserta_idkategori_peserta']) echo'selected'?> value="<?php echo $l['kategori_peserta_idkategori_peserta']; ?>"><?php echo $l['kategori_peserta']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>

                <input type="submit" name="submit" value="Edit" class="btn btn-success">
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
          <!-- end isi disini -->
      </div>
    </section>
</div>