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
<section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/8.jpg'); ?>);">
    <div class="auto-container">
        <h1>List Produk</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Beranda </a></li>
            <li>Toko</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="shop-list">
            <div class="row clearfix">
                
                <!--content side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label pull-left">Melihat 1-7 dari 84 hasil
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/index'); ?>"><i class="fa fa-th"></i></a>
                                <a href="<?php echo site_url('shop/list'); ?>" class="active"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                        <div class="sort-by pull-right">
                            <select class="custom-select-box">
                                <option>Pengurutan Otomatis</option>
                                <option>Harga: Termurah</option>
                                <option>Harga: Tertinggi</option>
                                <option>Murah -> Tinggi</option>
                                <option>Tinggi -> Murah</option>
                            </select>
                        </div>
                    </div>

                    <!-- Product Block Two -->
                    <div class="product-block-two">
                        <div class="row clearfix">
                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                <div class="image wow fadeInLeft">
                                    <figure><a href="product-details.html"><img src="<?php echo base_url('/assets/images/resource/shop-list-1.jpg') ?>" alt=""></a></figure>
                                    <span class="tag">Promo!</span>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url('/assets/images/resource/shop-list-1.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                <div class="inner-box wow fadeInRight">
                                    <h3><a href="product-details.html">Women’s Watch</a></h3>
                                    <span class="price"><del>$154.00</del> $145.10</span>
                                    <div class="text">The biggest gift would be from me and the card attached the minnow would be lost and if you threw a party - invited everyone you knew your see the biggest gift would say thank you would be from me and the card attached would say thank you for being a friend.</div>
                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block Two -->
                    <div class="product-block-two">
                        <div class="row clearfix">
                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                <div class="image wow fadeInLeft">
                                    <figure><a href="product-details.html"><img src="<?php echo base_url('/assets/images/resource/shop-list-2.jpg') ?>" alt=""></a></figure>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url('/assets/images/resource/shop-list-2.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                <div class="inner-box wow fadeInRight">
                                    <h3><a href="product-details.html">Men’s Casual Tees</a></h3>
                                    <span class="price"><del>$240.00</del> $210.30</span>
                                    <div class="text">The biggest gift would be from me and the card attached the minnow would be lost and if you threw a party - invited everyone you knew your see the biggest gift would say thank you would be from me and the card attached would say thank you for being a friend.</div>
                                    <div class="color-list">
                                        <span class="gray active"></span>
                                        <span class="brown"></span>
                                    </div>
                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block Two -->
                    <div class="product-block-two">
                        <div class="row clearfix">
                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                <div class="image wow fadeInLeft">
                                    <figure><a href="product-details.html"><img src="<?php echo base_url('/assets/images/resource/shop-list-3.jpg') ?>" alt=""></a></figure>
                                    <span class="tag">Promo!</span>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url('/assets/images/resource/shop-list-3.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                <div class="inner-box wow fadeInRight">
                                    <h3><a href="product-details.html">Backpacks</a></h3>
                                    <span class="price">$315.00</span>
                                    <div class="text">The biggest gift would be from me and the card attached the minnow would be lost and if you threw a party - invited everyone you knew your see the biggest gift would say thank you would be from me and the card attached would say thank you for being a friend.</div>
                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block Two -->
                    <div class="product-block-two">
                        <div class="row clearfix">
                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                <div class="image wow fadeInLeft">
                                    <figure><a href="product-details.html"><img src="<?php echo base_url('/assets/images/resource/shop-list-4.jpg') ?>" alt=""></a></figure>
                                    <span class="tag">Promo!</span>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url('/assets/images/resource/shop-list-4.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                <div class="inner-box wow fadeInRight">
                                    <h3><a href="product-details.html">Dolo’s Trending</a></h3>
                                    <span class="price">$188.10</span>
                                    <div class="text">The biggest gift would be from me and the card attached the minnow would be lost and if you threw a party - invited everyone you knew your see the biggest gift would say thank you would be from me and the card attached would say thank you for being a friend.</div>
                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block Two -->
                    <div class="product-block-two">
                        <div class="row clearfix">
                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                <div class="image wow fadeInLeft">
                                    <figure><a href="product-details.html"><img src="<?php echo base_url('/assets/images/resource/shop-list-5.jpg') ?>" alt=""></a></figure>
                                    <span class="tag">Promo!</span>
                                    <div class="btn-box">
                                        <a href="<?php echo base_url('/assets/images/resource/shop-list-5.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                <div class="inner-box wow fadeInRight">
                                    <h3><a href="product-details.html">Casual Hat</a></h3>
                                    <span class="price">$80.00</span>
                                    <div class="text">The biggest gift would be from me and the card attached the minnow would be lost and if you threw a party - invited everyone you knew your see the biggest gift would say thank you would be from me and the card attached would say thank you for being a friend.</div>
                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                </div>
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
                                <aside class="sidebar shop-sidebar">
                                    <!--Price Filter Widget-->
                                    <div class="sidebar-widget price-filter-widget">
                                        <div class="sidebar-title"><h2>Skala Harga</h2></div>
                                        <div class="widget-content">
                                            <div class="range-slider-one clearfix">
                                                <div class="price-range-slider"></div>
                                                <div class="clearfix">
                                                    <div class="pull-right">
                                                        <a href="#" class="theme-btn">Saring Harga</a>
                                                    </div>
                                                    <div class="pull-left">
                                                        <div class="title">Harga:</div>
                                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Categories -->
                                    <div class="sidebar-widget categories">
                                        <div class="sidebar-title"><h2>Kategori</h2></div>
                                        <ul class="category-list">
                                            <li><a href="#">Biji Kopi  <span>(50)</span></a></li>
                                            <li><a href="#">Biji Kopi Khusus   <span>(06)</span></a></li>
                                            <li><a href="#">Mesin Kopi   <span>(84)</span></a></li>
                                            <li><a href="#">Penyaring Kopi <span>(70)</span></a></li>
                                        </ul>
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