
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" style="color: white">
          <img src="<?= base_url('asset/img/user.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span> 
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li >
          <a href="<?= base_url('Admin_C/dash')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Penyelenggara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Penyelenggara/penyelenggara');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Penyelenggara/add');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kategori Penyelenggara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Kategori_Penyelenggara/kategori');?>"><i class="fa fa-circle-o"></i> Daftar</a></li>
            <li><a href="<?= base_url('Kategori_Penyelenggara/tambah_kategori');?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i> <span>Tempat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Tempat/tempat');?>"><i class="fa fa-circle-o"></i>Daftar</a></li>
            <li><a href="<?= base_url('Tempat/tambah_tempat');?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Peserta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Peserta/peserta');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Peserta/tambah_peserta');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Kategori Peserta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Kategori_Peserta/kategori_peserta');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Kategori_Peserta/tambah_peserta');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Acara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Acara/lihat');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Acara/add');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Jenis Acara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Jenis_Acara/lihat');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Jenis_Acara/add');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kategori Acara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Kategori_Acara/lihat');?>"><i class="fa fa-circle-o"></i> Daftar Kategori Acara</a></li>
            <li><a href="<?= base_url('Kategori_Acara/add');?>"><i class="fa fa-circle-o"></i> Tambah Kategori Acara</a></li>
          </ul>
        </li>

        <li class="treeview"> 
          <a href="#">
            <i class="fa fa-user"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('Admin_C/admin');?>"><i class="fa fa-circle-o"></i> Daftar </a></li>
            <li><a href="<?= base_url('Admin_C/tambah_admin');?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>