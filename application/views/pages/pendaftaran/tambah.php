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
            <!-- form start -->
            <form method="post" action="<?php echo base_url('Pendaftaran/tambah_proses') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Pendaftaran</label>
                  <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode Pendaftaran" value="<?= $kodeunik; ?>" readonly>
                </div>

                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM Anda" value="<?php echo set_value('nim'); ?>">
                  <?php echo form_error('nim'); ?>
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" value="<?php echo set_value('nama'); ?>">
                  <?php echo form_error('nama'); ?>
                </div>

                <div class="form-group">
                  <label>Tanggal Mulai</label>
                  <div class="input-group">
                  <div class="row" style="width: 50%"></div>
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="waktu_mulai" placeholder="Waktu Mulai" value="<?php echo set_value('waktu_mulai'); ?>">
                    <?php echo form_error('waktu_mulai'); ?>
                  </div>
                </div>

                <div class="row"></div>
                  <div class="form-group">
                    <label>Jam Mulai</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="time" class="form-control" name="jam_awal" placeholder="Jam Mulai" value="<?php echo set_value('jam_awal'); ?>">
                      <?php echo form_error('jam_awal'); ?>
                    </div>
                  </div>

                <div class="form-group">
                  <label>Tanggal Selesai</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" name="waktu_selesai" placeholder="Waktu Selesai" value="<?php echo set_value('waktu_selesai'); ?>">
                    <?php echo form_error('waktu_selesai'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label>Jam Selesai</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="time" class="form-control" name="jam_selesai" placeholder="Jam Selesai" value="<?php echo set_value('jam_selesai'); ?>">
                    <?php echo form_error('jam_selesai'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="" style="display: none">Pilih Status</option>
                        <option value="Sudah Bayar"<?php echo set_value('status','Sudah Bayar'); ?> >Sudah Bayar</option>
                        <option value="Belum Bayar"<?php echo set_value('status','Belum Bayar'); ?> >Belum Bayar</option>
                        <option value="Free"<?php echo set_value('status','Free'); ?> >Free</option>
                    </select>
                    <?php echo form_error('status'); ?>
                </div>

                <div class="form-group">
                  <label>Id Acara</label>
                  <input type="text" name="acara_id_acara" class="form-control" id="acara_id_acara" placeholder="Id Acara" value="<?php echo set_value('acara_id_acara'); ?>">
                  <?php echo form_error('acara_id_acara'); ?>
                </div>

                <div class="form-group">
                  <label>Id Peserta</label>
                  <input type="text" name="peserta_id_peserta" class="form-control" id="peserta_id_peserta" placeholder="Id Peserta" value="<?php echo set_value('peserta_id_peserta'); ?>">
                  <?php echo form_error('peserta_id_peserta'); ?>
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