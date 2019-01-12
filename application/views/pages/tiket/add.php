<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Daftar Tiket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php echo validation_errors(); ?>
              <form role="form" action="<?= base_url('Tiket/add_proses')?>" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Jumlah Tiket</label>
                  <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Enter ..." value="<?= set_value('jumlah') ?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" id="harga" placeholder="Enter ..." value="<?= set_value('harga') ?>">
                </div>
                <div class="form-group">
                  <label>Nama Acara</label>
                  <select class="form-control" name="acara_id_acara">
                  <option value="" style="display: none">Nama Acara</option>
                  <?php foreach($acara as $l){ ?>
                  <option value="<?php echo $l['id_acara']; ?>"><?php echo $l['nama_acara']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kategori_peserta</label>
                  <select class="form-control" name="kategori_peserta_idkategori_peserta">
                  <option value="" style="display: none">Kategroi Peserta</option>
                  <?php foreach($kategori_peserta as $l){ ?>
                  <option value="<?php echo $l['idkategori_peserta']; ?>"><?php echo $l['kategori_peserta']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


