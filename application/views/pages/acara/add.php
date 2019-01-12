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
          <div class="box box-x warning">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Acara</h3>
            </div>
            <!-- /.box-header -->
            <?php echo validation_errors(); ?>
<!--             <?php echo form_open_multipart('Acara/add_proses');?> -->
              <form role="form" action="<?= base_url('Acara/add_proses')?>" method="post" enctype="multipart/form-data" />
            <div class="box-body">
                <!-- text input -->            
                <div class="form-group">
                  <label>Nama Acara</label>
                  <input type="text" name="nama_acara" class="form-control" id="nama_acara" placeholder="nama_acara" value="<?=set_value('nama_acara')?>">
            </div>
            <div class="form-group">
              <label>Jenis Acara</label>
                <select class="form-control" name="jenis_acara_idjenis_acara">
                  <option value="" style="display: none">Jenis Acara</option>
                  <?php foreach($jenis_acara as $l){ ?>
                  <option value="<?php echo $l['idjenis_acara']; ?>"><?php echo $l['jenis_acara']; ?>   </option>
                  <?php } ?>
                </select>
            </div>
            <!-- /.box-header -->
           <div class="form-group">
            <label>Deskripsi Acara</label>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" name="deskripsi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;
                          " value="<?=set_value('deskripsi')?>"></textarea>
              </form>
            </div>
            </div>
              <!-- Date -->
              <div class="form-group">
                <label>Tanggal Mulai</label>
                  <div class="input-group">
                  <div class="row" style="width: 50%"></div>
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="tanggal_mulai" placeholder="Tanggal Mulai" value="<?php echo set_value('tanggal_mulai'); ?>">
                  </div>
              </div>
              <div class="form-group">
                <label>Waktu Mulai</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai" value="<?php echo set_value('waktu_mulai'); ?>">
                  </div>
              </div>
             <div class="form-group">
                <label>Tanggal Akhir</label>
                    <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="tanggal_akhir" placeholder="Tanggal Akhir" value="<?php echo set_value('tanggal_akhir'); ?>">
                  </div>
              </div>
                <div class="form-group">
                  <label>Waktu Akhir</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control" name="waktu_akhir" placeholder="Waktu Akhir" value="<?php echo set_value('waktu_akhir'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Kategori Acara</label>
                  <select class="form-control" name="kategori_acara_idkategori_acara">
                  <?php foreach($kategori_acara as $l){ ?>
                  <option value="<?php echo $l['idkategori_acara']; ?>"><?php echo $l['kategori_acara']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Penyelenggara</label>
                  <select class="form-control" name="penyelenggara_id_penyelenggara">
                  <?php foreach($penyelenggara as $l){ ?>
                  <option value="<?php echo $l['id_penyelenggara']; ?>"><?php echo $l['nama_penyelenggara']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>img input</label>
                  <!-- <?php echo form_upload(['name'=>'gambar', 'class'=>'form-control']); ?> -->
                  <input type="file" class="image_upload" name="gambar" value="<?= set_value('gambar')?>" width="100px"heigh />
                </div>
                 <div class="box-footer">
                <input type="submit" class="btn btn-success" value="submit">
              </div>
              </form> 
            </div>
          </div>
        </div> 
      </div>
    </section>
  </div>


