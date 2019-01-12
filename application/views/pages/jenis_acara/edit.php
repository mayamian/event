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
              <h3 class="box-title">Edit Jenis Acara</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <?php echo validation_errors(); ?>
              <form method="post" action="<?php echo base_url('Jenis_Acara/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>No</label>
                  <input type="text" name="idjenis_acara" class="form-control" id="idjenis_acara" placeholder="Id jenis" value="<?php echo !empty($jenis_acara->idjenis_acara)? $jenis_acara->idjenis_acara: set_value('idjenis_acara');?>">
                </div>
                <div class="form-group">
                  <label>Jenis Acara</label>
                  <input type="text" name="jenis_acara" class="form-control" id="jenis_acara" placeholder="jenis acara" value="<?php echo !empty($jenis_acara->jenis_acara)? $jenis_acara->jenis_acara: set_value('jenis_acara'); ?>">
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