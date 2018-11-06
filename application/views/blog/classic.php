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
    
    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/6.jpg'); ?>);">
        <div class="auto-container">
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Blog Standard</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
            
                <!--content side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">                         
                                <div class="image"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/blog-1.jpg') ?>" alt=""></a>
                                </div>
                                <span class="tag">Decorations</span>
                            </div>
                            <div class="lower-content">
                                <ul class="info">
                                    <li><i class="fa fa-user-o"></i> by Mike adam</li>
                                    <li><i class="fa fa-clock-o"></i> 13 Jan 2018</li>
                                </ul>
                                <h3><a href="<?php echo site_url('blog/single'); ?>">Be deluxe apartment in the sky</a></h3>
                                <div class="text">The biggest gift would be from me and the card attached would say thank you of the pie so this is the tale of our long long time they'll have to make the best of things its an uphill climb.</div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">                         
                                <div class="image"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/blog-2.jpg') ?>" alt=""></a>
                                </div>
                                <span class="tag">Decorations</span>
                            </div>
                            <div class="lower-content">
                                <ul class="info">
                                    <li><i class="fa fa-user-o"></i> by Mike adam</li>
                                    <li><i class="fa fa-clock-o"></i> 13 Jan 2018</li>
                                </ul>
                                <h3><a href="<?php echo site_url('blog/single'); ?>">Various letters and symbols specific to the output</a></h3>
                                <div class="text">The biggest gift would be from me and the card attached would say thank you of the pie so this is the tale of our long long time they'll have to make the best of things its an uphill climb.</div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">                         
                                <div class="image"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/blog-3.jpg') ?>" alt=""></a>
                                </div>
                                <span class="tag">Decorations</span>
                            </div>
                            <div class="lower-content">
                                <ul class="info">
                                    <li><i class="fa fa-user-o"></i> by Mike adam</li>
                                    <li><i class="fa fa-clock-o"></i> 13 Jan 2018</li>
                                </ul>
                                <h3><a href="<?php echo site_url('blog/single'); ?>">Might also explain why one can now find slightly</a></h3>
                                <div class="text">The biggest gift would be from me and the card attached would say thank you of the pie so this is the tale of our long long time they'll have to make the best of things its an uphill climb.</div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image-box">                         
                                <div class="image"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/blog-4.jpg') ?>" alt=""></a>
                                </div>
                                <span class="tag">Decorations</span>
                            </div>
                            <div class="lower-content">
                                <ul class="info">
                                    <li><i class="fa fa-user-o"></i> by Mike adam</li>
                                    <li><i class="fa fa-clock-o"></i> 13 Jan 2018</li>
                                </ul>
                                <h3><a href="<?php echo site_url('blog/single'); ?>">Publication going to print with overlooked</a></h3>
                                <div class="text">The biggest gift would be from me and the card attached would say thank you of the pie so this is the tale of our long long time they'll have to make the best of things its an uphill climb.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Styled Pagination -->
                    <!-- <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div> -->

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Box -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title"><h2>Search Keyword</h2></div>
                            <form method="post" action="http://t.commonsupport.com/lescons/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Keyword" required="">
                                    <button type="submit"><span class="icon flaticon-search-2"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h2>Categories</h2></div>
                            <ul class="category-list">
                                <li><a href="#">Home Decors  <span>(50)</span></a></li>
                                <li><a href="#">Furniture   <span>(06)</span></a></li>
                                <li><a href="#">Women’s   <span>(84)</span></a></li>
                                <li><a href="#">Men’s <span>(70)</span></a></li>
                                <li><a href="#">Fashions    <span>(26)</span></a></li>
                                <li><a href="#">Wrist Watches    <span>(30)</span></a></li>
                            </ul>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Posts</h2></div>

                            <article class="post">
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/post-thumb-1.jpg') ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo site_url('blog/single'); ?>">Instances of the unusual word to end</a></div>
                                <div class="post-info"><i class="fa fa-clock-o"></i> 13 Jan 2018</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/post-thumb-2.jpg') ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo site_url('blog/single'); ?>">The original text remain in the Lorem</a></div>
                                <div class="post-info"><i class="fa fa-clock-o"></i> 25 Feb 2018</div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/post-thumb-3.jpg') ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo site_url('blog/single'); ?>">Exploit the fact that fills text will born </a></div>
                                <div class="post-info"><i class="fa fa-clock-o"></i> 13 Jan 2018</div>
                            </article>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar-widget">
                            <div class="sidebar-title"><h2>tags</h2></div>
                            <ul class="tag-list">
                                <li><a href="#">Chairs</a></li>
                                <li><a href="#">Sofas</a></li>
                                <li><a href="#">Furnitures</a></li>
                                <li><a href="#">Bottles</a></li>
                                <li><a href="#">Home Decors</a></li>
                                <li><a href="#">Lamp</a></li>
                                <li><a href="#">Pots</a></li>
                                <li><a href="#">Wall Clock</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    <!-- Main Footer -->
    <footer class="main-footer bg9">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column footer-column col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget about-widget">
                            <div class="widget-content">
                                <div class="footer-logo">
                                    <a href="<?php echo site_url('home/index'); ?>"><img src="<?php echo base_url('/assets/images/logo1.png') ?>"/></a>
                                </div>
                                <div class="text white">Sky Nine Coffee menyediakan kopi arabika green bean, roasted bean dan berbagai alat seduh kopi.</div>
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> <span>Firman :</span> +62 815-1798-0622</li>
                                    <li><i class="fa fa-phone"></i> <span>Oscar :</span>  ‭‭+62 878-7768-9782</li>
                                    <li><i class="fa fa-envelope-open-o"></i> <span>Email :</span>  skynine.coffee.id@gmail.com</li>
                                </ul>
                            </div>
                        </div>     
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-7 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Tautan Langsung</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="<?php echo site_url('aboutus/index'); ?>">Tentang Kami</a></li>
                                            <li><a href="<?php echo site_url('contactus/index'); ?>">Hubungi Kami</a></li>
                                            <li><a href="<?php echo site_url('blog/index'); ?>">Blog</a></li>
                                            <li><a href="<?php echo site_url('video/index'); ?>">Video</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Informasi</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Ketentuan</a></li>
                                            <li><a href="#">Privasi</a></li>
                                            <li><a href="#">Keamanan</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Bantuan</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Pemilihan Pembayaran</a></li>
                                            <li><a href="#">Pembatalan</a></li>
                                            <li><a href="#">Pengiriman</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix"> 
                    <div class="pull-left">
                        <div class="copyright">© 2018 <a href="<?php echo site_url('home/index'); ?>">Hauw.</a> Yeah!.</div>
                    </div>
                    <div class="pull-right clearfix">
                        <div class="social-links">
                            <h4>Sosial Media :</h4>
                            <ul class="social-icon-two clearfix">
                                <li><a href="https://www.facebook.com/skyninecoffee.id"><i class="fa fa-facebook"></i></a></li> 
                                <li><a href="https://www.yooying.com/skyninecoffee"><i class="fa fa-yahoo"></i></a></li> 
                                <li><a href="https://www.instagram.com/skyninecoffee/"><i class="fa fa-instagram"></i></a></li> 
                                <li><a href="https://plus.google.com/u/4/100688123397709406521"><i class="fa fa-google-plus"></i></a></li> 
                                <li><a href="https://www.youtube.com/channel/UCZEk7mks59vl3TdRDD_OaLQ"><i class="fa fa-youtube-play"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

        <br><br><br>
        <div class="auto-container">
            <!-- parallax -->
            <div class="footer-water">
                <div class="box">
                    <div id="water" class="water">
                        <div id="wave" class="water_wave water_wave_back1">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_back2">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_back3">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_middle1">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_middle2">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_middle3">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_front1">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_front2">
                            <div class="image-container"></div>
                        </div>
                        <div id="wave" class="water_wave water_wave_front3">
                            <div class="image-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end paralax -->
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>