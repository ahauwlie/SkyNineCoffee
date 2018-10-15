<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 9:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SkyNineCoffee | Home Page</title>
    <?php echo $css; ?>
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo site_url('/assets/images/logokopi.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('/assets/images/logokopi.png') ?>" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    <!--Header Span-->
    <div class="header-span"></div>
    <!-- Main Header-->
    <header class="main-header">
        <!--Main Box-->
        <div class="main-box">
            <div class="nav-outer clearfix">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="#">Home</a>
                                <ul>
                                    <li><a href="index-2.html">Home Style 01</a></li>
                                    <li><a href="index-3.html">Home Style 02</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index-2.html">Header Type 01</a></li>
                                            <li><a href="index-3.html">Header Type 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>                                
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-classic.html">Latest Blog</a></li>
                                            <li><a href="blog-single.html">Post Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>   

                            <li class="dropdown"><a href="#">Shop</a>
                                <ul>
                                    <li><a href="shop-grid.html">Products Grid View</a></li>
                                    <li><a href="shop-list.html">Products List View</a></li>
                                    <li><a href="external-products.html">Product Details 01</a></li>
                                    <li><a href="variable-products.html">Product Details 02</a></li>
                                    <li><a href="product-details.html">Product Details 03</a></li>
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="iner-box">
                    <ul class="social-icon-one">
                        <li><a href="<?php echo site_url('auth/login/index'); ?>"><i class="fa fa-user"></i> Masuk/Daftar</a></li>
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
                    <div class="text">Menu</div>
                    <div class="menu-btn"><span class="fa fa-bars"></span></div>
                </div>
                <div class="links-outer">
                    <div class="links-box">
                        <ul class="navigation">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </div>
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


    <!-- mulai -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/0ctF0lmPM1M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">ES KRIM CAMPUR KOPI SELAIN AFFOGATO | Q&A - BREWCODE EPS. 4</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/xOWlvmBFoQI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">MANUAL BREW | SYPHON TUTORIAL - COFFEE2BREW EPS. 3</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/bMVQeWOWyQQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">CAPPUCCINO VS LATTE - BREWCODE EPS. 3</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="300" height="350" src="https://www.youtube.com/embed/aK-eEcK9pXU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">MANUAL BREW | V60 TUTORIAL - COFFEE2BREW EPS. 2</div>
                        </div>
                    </div>     

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/sNN4qNhNJkU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">KENAPA AMERICANO NAMANYA AMERICANO? - BREWCODE EPS. 2</div>
                        </div>
                    </div>        

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/UdaC5Z7l6Cw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">MANUAL BREW | AEROPRESS TUTORIAL - COFFEE2BREW EPS. 1</div>
                        </div>
                    </div>    

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/XZFk5wrGj64" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">TERNYATA INI BEDANYA ARABICA DAN ROBUSTA - BREWCODE EPS. 1</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/Aemel8rqnsw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">La Marzocco GS3 (INDONESIA REVIEW) - Sky Nine Coffee</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/ctgD6tqcCgc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">V60 Workshop by Sky Nine Coffee</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/rVuvaqO15oE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">Aeropress Workshop by Sky Nine Coffee</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/zWetfZoQ2Kc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">V60 (HOW TO) - Sky Nine Coffee</div>
                        </div>
                    </div>
                    
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/OyG30TJL0Lo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">Latte Art Workshop by Sky Nine Coffee</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/bygp97AdKOM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">Happy Valentine's Day - Sky Nine Coffee</div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- abis -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>