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

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- isi disini -->
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Kategori Tiket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <?php echo validation_errors(); ?> 
              <!-- <?php print_r($kategori_tiket); ?> -->
              <form method="post" action="<?php echo base_url('Tiket/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>No Tiket</label>
                  <input type="text" name="id_tiket" class="form-control" id="id_tiket" placeholder="No Tiket" value="<?php echo !empty($tiket->id_tiket) ? $tiket->id_tiket : set_value('id_tiket'); ?>">
                </div>
                <div class="form-group">
                  <label>Jumlah Tiket</label>
                  <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Tiket" value="<?php echo !empty($tiket->jumlah) ? $tiket->jumlah : set_value('jumlah'); ?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga Tiket" value="<?php echo !empty($tiket->harga) ? $tiket->harga : set_value('harga'); ?>">
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