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
              <h3 class="box-title">Edit Kategori Acara</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <?php echo validation_errors(); ?>
              <!-- <?php ($kategori_acara); ?> -->
              <form method="post" action="<?php echo base_url('Kategori_Acara/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>No Kategori</label>
                  <input type="text" name="idkategori_acara" class="form-control" id="idkategori_acara" placeholder="Id kategori" value="<?php echo !empty($kategori_acara->idkategori_acara) ? $kategori_acara->idkategori_acara : set_value('idkategori_acara'); ?>">
                </div>
                <div class="form-group">
                  <label>Kategori Acara</label>
                  <input type="text" name="kategori_acara" class="form-control" id="kategori_acara" placeholder="Kategori acara" value="<?php echo !empty($kategori_acara->kategori_acara) ? $kategori_acara->kategori_acara : set_value('kategori_acara'); ?>">
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