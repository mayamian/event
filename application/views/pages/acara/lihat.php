<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Amikom Event
        <small>Event Universitas AMIKOM Yogyakarta</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="activ      </ol>
e">General Elements</li>
    </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- isi disini -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Acara</h3>
            <a href="<?= base_url('Acara/add');?>" class="btn btn-primary">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
            <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 56px;">No</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 80px;">Nama Acara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Jenis Acara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">Deskripsi</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 70px;">Tanggal Mulai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 70px;">Waktu Mulai</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 70px;">Tanggal Berakhir</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 70px;">Waktu Berakhir</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 70px;">Kategori Acara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Penyelenggara</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 70px;">Gambar</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 90px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 120px;">Aksi</th> 
                </tr>
            </thead>
            <tbody>
            <?php 
              foreach ($list_acara as $row){
             ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $row['id_acara']; ?></td>
                <td><?php echo $row['nama_acara']; ?></td>
                <td><?php echo $row['jenis_acara']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><?php echo $row['tanggal_mulai']; ?></td>
                <td><?php echo $row['waktu_mulai']; ?></td>
                <td><?php echo $row['tanggal_akhir']; ?></td>
                <td><?php echo $row['waktu_akhir']; ?></td>
                <td><?php echo $row['kategori_acara']; ?></td>
                <td><?php echo $row['nama_penyelenggara']; ?></td>
                <td><img src="<?php echo base_url('uploads/'.$row['gambar']); ?>"width="100px" height="100px" ></td>
                <td>
                  <div class="btn-group">
                  <span>
                    <?php
                      if ($row['status']) {
                        echo "Tampilkan";
                      }else{
                        echo "Belum Tampil";
                      }
                    ?>
                  </span>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <?php if ($row['status']==1): ?>
                      <li><a href="<?= base_url('Acara/update_status/0/'.$row['id_acara']) ?>">Belum Tampil</a></li>
                    <?php else: ?>
                      <li><a href="<?= base_url('Acara/update_status/1/'.$row['id_acara']) ?>">Tampilkan</a></li>
                    <?php endif; ?>
                  </ul>
                </div>
                </td>
                <td>
                  <a href="<?= base_url('Acara/edit/' .$row['id_acara']);?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?= base_url('Acara/hapus/'.$row['id_acara']) ?>" class="btn-danger btn-sm" onclick="return confirm(this);">Hapus</a>
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