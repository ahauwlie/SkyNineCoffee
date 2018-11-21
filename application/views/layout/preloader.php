    <!-- Main Header-->
    <header class="main-header">
        <!--Main Box-->
        <div class="main-box">
            <div class="nav-outer clearfix">

                <div class="iner-box">
                    <ul class="social-icon-one">
                        <!-- <li><a href="<?php echo site_url('login/index'); ?>"><i class="fa fa-user"></i> Masuk/Daftar</a></li> -->

                        <?php if ($this->session->userdata('login')) { ?>
                        <!-- <h1>hay</h1> -->
                        <li><a href="<?php echo site_url('login/logout'); ?>">Keluar </a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo site_url('login/index'); ?>"><i class="fa fa-user"></i> Masuk/Daftar</a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="logo-outer">
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url('/assets/images/skynine.png') ?>"/></a>
                        <a href="#"><img src="<?php echo base_url('/assets/images/coffee.png') ?>"/></a>
                    </div>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-magnifying-glass"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="http://t.commonsupport.com/lescons/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="like-btn"><span class="icon flaticon-like"></span></div>
                    <div class="cart-btn">
                        <a href="<?php echo site_url('shop/cart'); ?>">
                            <!-- <span class="count"> </span> data keranjang berapa banyak -->
                            <span class="icon flaticon-shopping-bag"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!--Mobile Menu-->
            <div class="mobile-menu">
                <div class="nav-header clearfix">
                    <div class="text">Skynine Coffee</div>
                </div>
            </div>
            
        </div>
        <!--End Main Box -->
        
    </header>
    <!--End Main Header -->    

    <!-- bar pilih menu -->
    <div class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <div class="text-center">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                    <?php if ($this->session->userdata('login')) { ?>
                                        <li class="menu-item home-icon">
                                            <a href="<?php echo site_url('Home_log/index'); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                        </li>
                                    <?php } else {?>
                                        <li class="menu-item home-icon">
                                            <a href="<?php echo site_url('Home/index'); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                        </li>
                                    <?php } ?>
                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('shop/index'); ?>" title="Fashion & Accessories" class="link-term mercado-item-title">Toko Kami</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('contactus/index'); ?>" title="Furnitures & Home decors" class="link-term mercado-item-title">Acara Kopi</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('blog/index'); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Artikel</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('video/index'); ?>" title="Tools & Equipments" class="link-term mercado-item-title" >Video</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('contactus/index'); ?>" title="Kid’s Toys" class="link-term mercado-item-title">Hubungi Kami</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('aboutus/index'); ?>" title="Organics & Spa" class="link-term mercado-item-title">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bar pilihan menu selesai -->