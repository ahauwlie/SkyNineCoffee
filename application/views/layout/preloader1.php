<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo site_url('Home_admin'); ?>" class="logo">
    <span class="logo-mini"><b>S9</b>A</span>
    <span class="logo-lg"><b>Skynine</b>Admin</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php  
              $session = $this->session->userdata('login');
              $nama = $session['full_name_us'];
              $foto = $session['img_us'];
              $email = $session['email_us'];
            ?>
            <img class="user-image" src="<?php echo base_url('assets/images/resource/photo_user/'.$foto) ?>" alt="">
            <span class="hidden-xs"><?php echo $nama; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img style="border-radius: 100%;height: 100px;width: 100px;" src="<?php echo base_url('/assets/images/resource/photo_user/'.$foto) ?>" alt="">
              <p>
                <?php echo "Hay, ".strtoupper($nama); ?>
                <small><?php echo $email; ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('/assets/images/resource/photo_user/'.$foto) ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <?php echo $nama; ?>
        <a href="#">|| <i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">BERANDA</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url('Home_admin'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul>
      </li>
      

      <li class="header">MANAJEMEN</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Barang</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('Barang_admin'); ?>"><i class="fa fa-circle-o"></i> Daftar Barang</a></li>
          <li><a href="<?php echo site_url('Barang_import_admin'); ?>"><i class="fa fa-circle-o"></i> Unggah data Barang</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Artikel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Daftar Artikel</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Penjualan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Menu Kasir</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Daftar Transaksi Penjualan</a></li>
        </ul>
      </li>
      <li><a href="<?php echo site_url('User_manage_admin'); ?>"><i class="fa fa-user-circle-o"></i> <span> Karyawan & Pelanggan</span></a></li>
      <li><a href="<?php echo site_url('Diskon_admin'); ?>"><i class="fa fa-tags"></i> <span> Kelola Diskon</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>