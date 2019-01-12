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
              <form role="form" action="<?= base_url('Kategori_Penyelenggara/tambah_proses')?>" method="post">
            <!-- form start -->
                <!-- text input -->
                <div class="form-group">
                  <label>Kategori Penyelenggara</label>
                  <input type="text" class="form-control" id=" kategori_penyelenggara" name="kategori_penyelenggara" placeholder="Kategori Penyelenggara" value="<?= set_value('kategori_penyelenggara') ?>">
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