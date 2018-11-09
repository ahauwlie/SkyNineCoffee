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

<body style="background-image: url(<?php echo base_url('assets/images/background/blue.jpg'); ?>);">
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

<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1>Contact us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home </a></li>
            <li>Contact us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Map Section -->
<section class="map-section">
    <div class="auto-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5072390908167!2d106.67931841447624!3d-6.328255095420276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e51eb777b679%3A0x597b2bb1c2ca8b4a!2sSky+Nine+Coffee!5e0!3m2!1sen!2sid!4v1541673369864" style="width:100%; height:500px;" style="border:0" allowfullscreen></iframe>
    </div>
</section>
<!--End Map Section -->

<!-- Main Footer -->
<footer class="main-footer bg9">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <div class="footer-logo col-sm-6">
                                <a href="<?php echo site_url('home/index'); ?>"><img src="<?php echo base_url('/assets/images/logo1.png') ?>"/></a>
                                <div class="text white">Skynine Coffee adalah coffee shop sekaligus roastery yang berlokasi di Tekno Park, Tangerang. Kami menyediakan biji kopi terbaik yang langsung diolah dari roastery kami.</div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> <span>Hubungi Kami :</span> +62 857 1488 9509</li>
                                    <li><i class="fa fa-phone"></i> <span>Atau :</span> +62 858 4140 2758</li>
                                    <li><i class="fa fa-envelope-open-o"></i> <span>Email :</span>  skynine.coffee.id@gmail.com</li>
                                </ul>
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
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<!--End Google Map APi-->
</body>
</html>