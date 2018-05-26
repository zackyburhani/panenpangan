<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin PanenPangan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/dist/css/skins/_all-skins.min.css')?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/morris.js/morris.css')?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css')?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

  <!--PLUGINS-->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/iCheck/flat/blue.css')?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/morris/morris.css')?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
  
  <link rel="shortcut icon" href="<?php blink('metronic/assets/admin/layout7/img/logo/favicon-16x16.png')?>"/>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/datepicker/datepicker3.css')?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
  <!-- Datatables -->
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/datatables/jquery.dataTables.css')?>">
  <link rel="stylesheet" href="<?php blink('/assets/AdminLTE/plugins/datatables/jquery.dataTables.min.css')?>">
  <!-- Highchart -->
  <script src="<?php blink('assets/Highcharts-6.1.0/code/highcharts.js')?>"></script>
  <script src="<?php blink('assets/Highcharts-6.1.0/code/highcharts-3d.js')?>"></script>
  <script src="<?php blink('assets/Highcharts-6.1.0/code/modules/exporting.js')?>"></script>
  <script src="<?php blink('assets/Highcharts-6.1.0/code/modules/export-data.js')?>"></script>
  
  <!--END PLUGINS-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php blink('Admin') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panenpangan</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
             <label class="pull-left" style="color: white; font-size: 15px; margin-top: 15px; margin-right: 15px;">Tanggal : <?php echo date("d-m-Y"); ?></label>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php blink('assets/img/img/logo/apple-icon-120x120.png')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php blink('assets/img/img/logo/apple-icon-120x120.png')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nama; ?>
                  <small><i>Copyright &copy; 2018 </i></small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><i class="fa fa-info"></i> Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php blink('Login/logout') ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class=""></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
