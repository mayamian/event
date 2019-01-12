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
              <h3 class="box-title">Edit Data Kategori Peserta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo validation_errors(); ?>
              <form method="post" action="<?php echo base_url('Kategori_Peserta/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>Id Kategori</label>
                  <input type="text" class="form-control" id="idkategori_peserta" name="idkategori_peserta" placeholder="Id Peserta" value="<?php echo !empty($kategori_peserta->idkategori_peserta)? $kategori_peserta->idkategori_peserta : set_value('idkategori_peserta'); ?>">
                </div>
                <div class="form-group">
                  <label>Kategori Peserta</label>
                  <input type="text" class="form-control" id="kategori_peserta" name="kategori_peserta" placeholder="Edit Kategori Peserta" value="<?php echo !empty($kategori_peserta->kategori_peserta)? $kategori_peserta->kategori_peserta : set_value('kategori_peserta'); ?>">
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