<!-- header header  -->
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <!-- Logo icon -->
                    <b><img src="<?php echo base_url('/assets/icons/aruna2.png') ?>" class="dark-logo" width="50px" height="50px" /></b>
                <!--End Logo icon -->
            </a>
        </div>
        <!-- End Logo -->

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0"></ul>
            <!-- User profile -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-account-circle profile-pic"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li><a><span>Hi, <?php if($this->session->has_userdata('name')) echo $this->session->name; ?>! (<?php if($this->session->has_userdata('job_position_name')) echo $this->session->job_position_name; ?>)</span></a></li>
                            <li><a href="<?php echo base_url('index.php/logout/proceed_logout'); ?>"><i class="mdi mdi-logout"></i> Keluar </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End header header -->
<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>

                <li class="nav-label">Beranda</li>
                <li> <a href="<?php echo base_url(); ?>"><i class="mdi mdi-home m-b-3"></i>Dashboard</a></li>
                <!-- <li> <a href="#"><i class="mdi mdi-file-chart m-b-3"></i>Pembukuan</a></li> -->
                <?php if($this->acl->allow('pembukuan') == 'ALLOWED'): ?>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file-chart m-b-3"></i><span class="hide-menu">Pembukuan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo site_url('pembukuan/pemasukan'); ?>">Pemasukan </a></li>
                        <li><a href="<?php echo site_url('pembukuan/pengeluaran'); ?>">Pengeluaran </a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($this->acl->allow('purchaseorder') == 'ALLOWED'): ?>
                <li> <a href="<?php echo site_url('purchaseorder/index'); ?>"><i class="mdi mdi-file-document m-b-3"></i>Purchase Order</a></li>
                <?php endif; ?>

                <li class="nav-label">Manajemen</li>
                <?php if($this->acl->allow('product') == 'ALLOWED'): ?>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="mdi mdi-wunderlist m-b-3"></i><span class="hide-menu">Barang</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo site_url('product/index'); ?>">Daftar Barang </a></li>
                            <li><a href="<?php echo site_url('product/restock'); ?>">Restock Barang Toko </a></li>
                            <?php if($this->acl->allow('orderbarang') == 'ALLOWED'): ?>
                                <li><a href="<?php echo site_url('orderbarang/index'); ?>">Order Barang </a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo site_url('product/form'); ?>">Unggah Daftar Barang </a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if($this->acl->allow('supplier') == 'ALLOWED'): ?>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="mdi mdi-domain m-b-3"></i><span class="hide-menu">Supplier</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo site_url('supplier/index'); ?>">Daftar Supplier </a></li>
                            <li><a href="<?php echo site_url('supplier/form'); ?>">Unggah Daftar Supplier </a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if($this->acl->allow('penjualan') == 'ALLOWED'): ?>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="mdi mdi-cart m-b-3"></i><span class="hide-menu">Penjualan</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo site_url('penjualan/menuKasir'); ?>">Menu Kasir </a></li>
                            <li><a href="<?php echo site_url('penjualan/daftarTransaksi'); ?>">Daftar Transaksi Penjualan </a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if($this->acl->allow('karyawan') == 'ALLOWED'): ?>
                    <li> <a href="<?php echo site_url('karyawan/index'); ?>"><i class="mdi mdi-account-multiple m-b-3"></i>Karyawan</a></li>
                <?php endif; ?>
                <?php if($this->acl->allow('pelanggan') == 'ALLOWED'): ?>
                    <li> <a href="<?php echo site_url('pelanggan/index'); ?>"><i class="mdi mdi-account-multiple m-b-3"></i>Pelanggan</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->