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
            <h3 class="box-title">Data Kategori Acara</h3>
            <a href="<?= base_url('Kategori_Acara/add');?>" class="btn btn-primary">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
            <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 70px;">No Kategori</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Penyelenggara</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Aksi</th>
                </tr>
            </thead>  
            <tbody>
            <?php 
              foreach ($list_kategoriacara->result() as $row){
             ?>
              <tr role="row" class="odd">
                <td class="sorting_1"><?php echo $row->idkategori_acara; ?></td>
                <td><?php echo $row->kategori_acara; ?></td>
                <td>
                  <a href="<?= base_url('Kategori_Acara/edit/' .$row->idkategori_acara);?>" class="btn btn-primary btn-sm">Edit</a>
                  <a href="<?= base_url('Kategori_Acara/hapus/'.$row->idkategori_acara) ?>" class="btn-danger btn-sm" onclick="return confirm(this);">Hapus</a>
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