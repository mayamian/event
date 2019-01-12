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
              <h3 class="box-title">Edit Data Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo validation_errors(); ?>
            <form method="post" action="<?php echo base_url('Pendaftaran/edit_proses') ?>">

              <div class="box-body">
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode" value="<?php echo !empty($pendaftaran->kode)? $pendaftaran->kode : set_value('kode'); ?>">
                </div>

                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM" value="<?php echo !empty($pendaftaran->nim)? $pendaftaran->nim : set_value('nim'); ?>">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo !empty($pendaftaran->nama)? $pendaftaran->nama : set_value('nama'); ?>">
                </div>

                <div class="form-group">
                  <label>Tanggal Mulai</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="waktu_mulai" placeholder="Tanggal Mulai" value="<?php echo !empty($pendaftaran->waktu_mulai)? $pendaftaran->waktu_mulai : set_value('waktu_mulai'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Jam Mulai</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control" name="jam_awal" placeholder="Jam Mulai" value="<?php echo !empty($pendaftaran->jam_awal)? $pendaftaran->jam_awal : set_value('jam_awal'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Tanggal Selesai</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="waktu_selesai" placeholder="Waktu Selesai" value="<?php echo !empty($pendaftaran->waktu_selesai)? $pendaftaran->waktu_selesai : set_value('waktu_selesai'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Jam Selesai</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai" value="<?php echo !empty($pendaftaran->jam_selesai)? $pendaftaran->jam_selesai : set_value('jam_selesai'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="" style="display: none">Pilih Salah satu</option>
                        <option value="Sudah Bayar"<?php echo set_value('status','Sudah Bayar'); ?> >Sudah Bayar</option>
                        <option value="Belum Bayar"<?php echo set_value('status','Belum Bayar'); ?> >Belum Bayar</option>
                        <option value="Free"<?php echo set_value('status','Free'); ?> >Free</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Id Acara</label>
                  <input type="text" name="acara_id_acara" class="form-control" id="acara_id_acara" placeholder="Id Acara" value="<?php echo !empty($pendaftaran->acara_id_acara)? $pendaftaran->acara_id_acara : set_value('acara_id_acara'); ?>"">
                </div>

                <div class="form-group">
                  <label>Id Peserta</label>
                  <input type="text" name="peserta_id_peserta" class="form-control" id="peserta_id_peserta" placeholder="Id Peserta" value="<?php echo !empty($pendaftaran->peserta_id_peserta)? $pendaftara3n->peserta_id_peserta : set_value('peserta_id_peserta'); ?>">
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