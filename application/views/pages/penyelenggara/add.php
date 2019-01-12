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
              <form role="form" action="<?= base_url('Penyelenggara/add_proses')?>" method="post">
              <!-- form start -->
                <!-- text input -->
                <div class="form-group">
                  <label>Kategori Penyelenggara</label>
                  <select class="form-control" name="kategori_penyelenggara">
                    <option value="" style="display: none">Pilih Kategori</option>
                      <?php foreach($kategori_penyelenggara as $l){ ?>
                    <option value="<?php echo $l['idkategori_penyelenggara']; ?>"><?php echo $l['kategori_penyelenggara']; ?>   </option>
                      <?php } ?>
                  </select>
                  <?php echo form_error('kategori_penyelenggara'); ?>
                </div>

                <div class="form-group">
                  <label >Nama Penyelenggara</label>
                  <input type="text" name="nama_penyelenggara" class="form-control" id="nama_penyelenggara" placeholder="Masukkan Nama Penyelenggara" value="<?php echo set_value('nama_penyelenggara'); ?>">
                  <?php echo form_error('nama_penyelenggara'); ?>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?php echo set_value('email'); ?>">
                  <?php echo form_error('email'); ?>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder=" Masukkan Password" value="<?php echo set_value('password'); ?>">
                  <?php echo form_error('password'); ?>
                </div>

                <div class="form-group">
                  <label>Logo Orma</label>
                  <!-- <?php echo form_upload(['name'=>'logo', 'class'=>'form-control']); ?> -->
                  <input type="file" class="image_upload" name="logo" value="<?= set_value('logo')?>" width="100px"heigh />
                </div>

                <div class="form-group">
                  <label>Deskripsi Penyelenggara</label>
                  <input type="text area" name="deskripsi_penyelenggara" class="form-control" id="deskripsi_penyelenggara" placeholder=" Masukkan Deskripsi Penyelenggara" value="<?php echo set_value('deskripsi_penyelenggara'); ?>">
                  <?php echo form_error('deskripsi_penyelenggara'); ?>
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" id="status" placeholder=" Masukkan Status" value="<?php echo set_value('status'); ?>">
                  <?php echo form_error('status'); ?>
                </div>

                <div class="form-group">
                  <label>Website</label>
                  <input type="text" name="web_url" class="form-control" id="web_url" placeholder=" Masukkan Website" value="<?php echo set_value('web_url'); ?>">
                  <?php echo form_error('web_url'); ?>
                </div>

                <div class="form-group">
                  <label>Instagram</label>
                  <input type="text" name="ig_url" class="form-control" id="ig_url" placeholder=" Masukkan Instagram" value="<?php echo set_value('ig_url'); ?>">
                  <?php echo form_error('ig_url'); ?>
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="tw_url" class="form-control" id="tw_url" placeholder=" Masukkan Twitter" value="<?php echo set_value('tw_url'); ?>">
                  <?php echo form_error('tw_url'); ?>
                </div>

                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="fb_url" class="form-control" id="fb_url" placeholder=" Masukkan Facebook" value="<?php echo set_value('fb_url'); ?>">
                  <?php echo form_error('fb_url'); ?>
                </div>

                <div class="form-group">
                  <label>Youtube</label>
                  <input type="text" name="youtube" class="form-control" id="youtube" placeholder=" Masukkan Youtube" value="<?php echo set_value('youtube'); ?>">
                  <?php echo form_error('youtube'); ?>
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