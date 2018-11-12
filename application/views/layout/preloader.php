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
                            <span class="count">3</span>
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
                                    <li class="menu-item home-icon">
                                        <a href="<?php echo site_url('Home/index'); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Fashion & Accessories" class="link-term mercado-item-title">Toko Kami</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg1">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('shop/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Furnitures & Home decors" class="link-term mercado-item-title">Acara Kopi</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg2">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('contactus/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Digital & Electronics" class="link-term mercado-item-title">Artikel</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg3">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('blog/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Tools & Equipments" class="link-term mercado-item-title" >Video</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg4">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('video/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Kid’s Toys" class="link-term mercado-item-title">Hubungi Kami</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg5">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('contactus/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Organics & Spa" class="link-term mercado-item-title">Tentang Kami</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg6">
                                                <div class="row">
                                                    <div class="custom-col-8">
                                                        <div class="wrap-vertical-nav">
                                                            <h3 class="banner-title">Cari tahu kami lebih lanjut</h3>
                                                            <button class="btn btn-primary"><a href="<?php echo site_url('aboutus/index'); ?>"> Klik disini</a> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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