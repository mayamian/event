<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Version 2.0</small>
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
            <h3 class="box-title">Data Tiket</h3>
            <a href="<?= base_url('Tiket/add');?>" class="btn btn-primary">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
            <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 70px;">No</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Jumlah Tiket</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Harga</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Acara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Peserta</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Aksi</th>
                </tr>
            </thead>  
            <tbody>
            <?php 
              foreach ($list_tiket as $row){
             ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $row['id_tiket']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['nama_acara']; ?></td>
                <td><?php echo $row['kategori_peserta']; ?></td>
                <td>
                  <a href="<?= base_url('Tiket/edit/' .$row['id_tiket']);?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?= base_url('Tiket/hapus/'.$row['id_tiket']) ?>" class="btn-danger btn-sm" onclick="return confirm(this);">Hapus</a>
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