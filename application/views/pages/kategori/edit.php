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
              <h3 class="box-title">Edit Data Kategori Penyelenggara</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <?php echo validation_errors(); ?>
              <form method="post" action="<?php echo base_url('Kategori_Penyelenggara/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>Id Penyelenggara</label>
                  <input type="text" class="form-control" id="idkategori_penyelenggara" name="idkategori_penyelenggara" placeholder="Id Penyelenggara" value="<?php echo !empty($kategori->idkategori_penyelenggara)? $kategori->idkategori_penyelenggara : set_value('idkategori_penyelenggara'); ?>">
                </div>
                <div class="form-group">
                  <label>Kategori Penyelenggara</label>
                  <input type="text" class="form-control" id="kategori_penyelenggara" name="kategori_penyelenggara" placeholder="Kategori Penyelenggara" value="<?php echo !empty($kategori->kategori_penyelenggara)? $kategori->kategori_penyelenggara : set_value('kategori_penyelenggara'); ?>">
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