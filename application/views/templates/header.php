     <!DOCTYPE html>
<html>
<head>
<title>Event Universitas AMIKOM Yogyakarta</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome --> 
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/jvectormap/jquery-jvectormap.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('asset/dist/css/AdminLTE.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('asset/dist/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url('asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">`
  <!-- Bootstrap Color Picker -->
   <link rel="stylesheet" href="<?= base_url('asset/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')?>">
  <!-- Bootstrap time Picker -->
   <link rel="stylesheet" href="<?= base_url('asset/plugins/timepicker/bootstrap-timepicker.min.css')?>">
   <link rel="stylesheet" href="<?= base_url('asset/bower_components/select2/dist/css/select2.min.css')?>">
   <link rel="stylesheet" href="<?= base_url('asset/style.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EKO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Event AMIKOM</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('asset/img/user.png')?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('asset/img/user.png')?>" class="img-circle" alt="User Image">
              </li>
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('Profil/index')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('Auth_penyelenggara/logout_penyelenggara')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
