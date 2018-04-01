  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php blink('assets/AdminLTE/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-database"></i> MASTER</li>
        <li>
          <a href="<?php blink('Admin') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Admin/Petani'); ?>">
            <i class="fa fa-user"></i> <span>Data Petani</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Admin/Kategori') ?>">
            <i class="fa fa-file"></i> <span>Data Kategori</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Admin/Barang') ?>">
            <i class="ion ion-cube"></i> <span>Data Barang</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
