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
            <h3 class="box-title">Data Penyelenggara Event</h3>
            <a href="<?= base_url('Penyelenggara/add');?>" class="btn btn-primary">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
            <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">No</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">Kategori Penyelenggara</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Nama Penyelenggara</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Email</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Password</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Logo</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Deskripsi Penyelenggara</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Status</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Website</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Instagram</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Twitter</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Facebook</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Youtube</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">Action</th>
              </tr>
            </thead>
            
            <tbody>
            <?php 
              foreach ($list_penyelenggara as $row){
             ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $row['id_penyelenggara']; ?></td>
                <td><?php echo $row['kategori_penyelenggara']; ?></td>
                <td><?php echo $row['nama_penyelenggara']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><img src="<?php echo base_url('/asset/img/logo_orma'.$row['logo']); ?>"width="100px" height="100px" ></td>
                <td><?php echo $row['deskripsi_penyelenggara']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['web_url']; ?></td>
                <td><?php echo $row['ig_url']; ?></td>
                <td><?php echo $row['tw_url']; ?></td>
                <td><?php echo $row['fb_url']; ?></td>
                <td><?php echo $row['youtube']; ?></td>
                <td>
                  <a href="<?= base_url('Penyelenggara/edit_penyelenggara/'.$row['id_penyelenggara']);?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?= base_url('Penyelenggara/hapus/'.$row['id_penyelenggara']) ?>" class="btn-danger btn-sm" onclick="return confirm(this);">Hapus</a>
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