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
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftaran Event</h3>
              <a href="<?= base_url('Pendaftaran/tambah_pendaftaran');?>" class="btn btn-primary">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Kode</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 250px;">NIM</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Nama</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Tanggal Mulai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Jam Mulai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Tanggal Selesai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Jam Selesai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Id Acara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Id Peserta</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                foreach ($list_pendaftaran->result() as $row){
                ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $row->kode; ?></td>
                  <td><?php echo $row->nim; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->waktu_mulai; ?></td>
                  <td><?php echo $row->jam_awal; ?></td>
                  <td><?php echo $row->waktu_selesai; ?></td>
                  <td><?php echo $row->jam_selesai; ?></td>
                  <td><?php echo $row->status; ?></td>
                  <td><?php echo $row->acara_id_acara; ?></td>
                  <td><?php echo $row->peserta_id_peserta; ?></td>
                <td>
                  <a href="<?= base_url('Pendaftaran/edit_pendaftaran/' .$row->kode);?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?= base_url('Pendaftaran/hapus/'.$row->kode) ?>" class="btn-danger btn-sm" onclick="return confirm(this);">Hapus</a>
                </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- end isi disini -->
      </div>
    </section>
</div>