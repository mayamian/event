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
              <h3 class="box-title">Tambah Lokasi Event</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url('Tempat/tambah_proses') ?>">
              <div class="box-body">
                <!-- <div class="form-group">
                  <label>No Tempat</label>
                  <input type="text" name="id_tempat" class="form-control" id="id_tempat" placeholder="Id Tempat">
                </div> -->
                <div class="form-group">
                  <label>Nama tempat</label>
                  <input type="text" name="nama_tempat" class="form-control" id="nama_tempat" placeholder="Nama Tempat">
                </div>
                <div class="form-group">
                  <label>Ruang Event</label>
                  <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Ruang Event">
                </div>
                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="" style="display: none">Pilih Salah satu</option>
                        <option value="Booking"<?php echo set_value('status','Booking'); ?>>Booking</option>
                        <option value="Kosong"<?php echo set_value('status','Kosong'); ?>>Kosong</option>
                    </select>
                </div>

              <input type="submit" name="submit" value="submit" class="btn btn-success">
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
          <!-- end isi disini -->
      </div>
    </section>
</div>