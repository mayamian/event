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
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <form method="post" action="<?php echo base_url('Penyelenggara/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>Id Penyelenggara</label>
                  <input type="text" name="id_penyelenggara" class="form-control" id="id_penyelenggara" placeholder="Id Penyelenggara" value="<?php echo !empty($penyelenggara->id_penyelenggara)? $penyelenggara->id_penyelenggara : set_value('id_penyelenggara'); ?>">
                </div>
                <div class="form-group">
                  <label>Kategori Penyelenggara</label>
                  <select class="form-control" name="kategori_penyelenggara">
                  <option value="" style="display: none"></option>
                  <?php foreach($kategori_penyelenggara as $l){ ?>
                  <option <?php if ($penyelenggara->kategori_penyelenggara == $l['idkategori_penyelenggara']) echo'selected'?> value="<?php echo $l['idkategori_penyelenggara']; ?>"><?php echo $l['kategori_penyelenggara']; ?>   </option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label >Nama Penyelenggara</label>
                  <input type="text" name="nama_penyelenggara" class="form-control" id="nama_penyelenggara" placeholder="Nama Penyelenggara" value="<?php echo !empty($penyelenggara->nama_penyelenggara)? $penyelenggara->nama_penyelenggara : set_value('nama_penyelenggara'); ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo !empty($penyelenggara->email)? $penyelenggara->email : set_value('email'); ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo !empty($penyelenggara->password)? $penyelenggara->password : set_value('password'); ?>">
                </div>
                <div class="form-group">
                  <label>Logo Orma</label>
                  <!-- <?php echo form_upload(['name'=>'logo', 'class'=>'form-control']); ?> -->
                  <input type="file" class="image_upload" name="logo" value="<?php echo !empty($penyelenggara->logo)? $penyelenggara->logo: set_value('logo');?>" width="100px"heigh />
                </div>
                <div class="form-group">
                  <label>Deskripsi Penyelenggara</label>
                  <input type="text" name="deskripsi_penyelenggara" class="form-control" id="deskripsi_penyelenggara" placeholder="Deskripsi Penyelenggara" value="<?php echo !empty($penyelenggara->deskripsi_penyelenggara)? $penyelenggara->deskripsi_penyelenggara : set_value('deskripsi_penyelenggara'); ?>">
                </div>
                <!-- <div class="form-group">
                  <label>Status</label>
                  <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="<?php echo !empty($penyelenggara->status)? $penyelenggara->status : set_value('status'); ?>">
                </div> -->
                <div class="form-group">
                  <label>Website</label>
                  <input type="text" name="web_url" class="form-control" id="web_url" placeholder="Website" value="<?php echo !empty($penyelenggara->web_url)? $penyelenggara->web_url : set_value('web_url'); ?>">
                </div>
                <div class="form-group">
                  <label>Instagram</label>
                  <input type="text" name="ig_url" class="form-control" id="ig_url" placeholder="Instagram" value="<?php echo !empty($penyelenggara->ig_url)? $penyelenggara->ig_url : set_value('ig_url'); ?>">
                </div>
                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="tw_url" class="form-control" id="tw_url" placeholder="Twitter" value="<?php echo !empty($penyelenggara->tw_url)? $penyelenggara->tw_url : set_value('tw_url'); ?>">
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="fb_url" class="form-control" id="fb_url" placeholder="Facebook" value="<?php echo !empty($penyelenggara->fb_url)? $penyelenggara->fb_url : set_value('fb_url'); ?>">
                </div>
                <div class="form-group">
                  <label>Youtube</label>
                  <input type="text" name="youtube" class="form-control" id="youtube" placeholder="Youtube" value="<?php echo !empty($penyelenggara->youtube)? $penyelenggara->youtube : set_value('youtube'); ?>">
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