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
     <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jenis Acara</h3>
            </div>
            <!-- /.box-header -->
            <?php echo validation_errors(); ?>
              <form role="form" action="<?= base_url('Jenis_Acara/add_proses')?>" method="post">
                <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Jenis Acara</label>
                  <input type="text" name="jenis_acara" class="form-control" id="jenis_acara" placeholder="Enter ..."value="<?= set_value('jenis_acara') ?>">
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


