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
              <h3 class="box-title">Tambah</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
              <?php echo validation_errors(); ?>
              <form role="form" action="<?= base_url('Admin_C/tambah_proses')?>" method="post">
              <!-- form start -->
                <!-- text input -->
                <!-- <div class="form-group">
                  <label>Id Admin</label>
                  <input type="text" name="id_superadmin" class="form-control" id="id_superadmin" placeholder="Masukkan Id Admin" value="<?php echo set_value('id_superadmin'); ?>">
                </div> -->
                <div class="form-group">
                  <label >Username </label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="<?php echo set_value('username'); ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" value="<?php echo set_value('password'); ?>">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?php echo set_value('Nama'); ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?php echo set_value('email'); ?>">
                </div>
                <div class="form-group">
                  <label>Akses</label>
                  <input type="text" name="akses" class="form-control" id="akses" placeholder=" Masukkan Akses" value="<?php echo set_value('akses'); ?>">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" id="status" placeholder=" Masukkan Status" value="<?php echo set_value('status'); ?>">
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