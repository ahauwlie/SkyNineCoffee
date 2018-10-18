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

    <!--Main Slider-->
    <section class="main-slider with-border">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="/assets/images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo base_url('/assets/images/main-slider/sky1.jpg') ?>"> 


						<div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:0;z:0;x:1000;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-7.png') ?>"></figure>
                        </div>
                        
                        <!-- <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['210','210','210','210']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-4.png') ?>"></figure>
                        </div> -->
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-125','-125','-90','-90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>Temukan kami:</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-15','-15','-15','-15']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Nikmati secangkir kopi <br> dari biji berkualitas terbaik.</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['120','120','90','90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/list'); ?>" class="theme-btn btn-style-one">Klik disini <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo base_url('/assets/images/main-slider/sky2.jpg') ?>"> 

                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:-1000;z:0;rX:0deg;rY:[-100%];rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-8.png') ?>"></figure>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['210','210','210','210']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:1000;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-9.png') ?>"></figure>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-125','-125','-90','-90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>Dapatkan diskon 25% untuk</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-15','-15','-15','-15']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Setiap pembelian kopi berkualitas<br> dari roaster terbaik.</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['120','120','90','90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/index'); ?>" class="theme-btn btn-style-one">Klik disini <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Testimonial Section -->
    <section class="testimonial-section bg8">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">

                <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/0ctF0lmPM1M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">BREWCODE adalah sebuah talkshow yang akan menjawab dan membahas berbagai pertanyaan seputar kopi. Di episode ini, Dimas dan Tomy akan mencoba menjawab beberapa pertanyaan dari para teman kopi.</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/xOWlvmBFoQI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">
                                <p>
                                    Ini cara membuat kopi manual brew dengan metode syphon.
                                    <br>
                                    Jika Anda tertarik dengan kopi kami,
                                    jangan ragu untuk menghubungi tim pemasaran kami:
                                    📱 +62 815-1798-0622 (Firman)
                                    📱 ‭‭+62 878-7768-9782 (Oscar)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/bMVQeWOWyQQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">BREWCODE adalah sebuah talkshow yang akan menjawab dan membahas berbagai pertanyaan seputar kopi. Di episode perdana ini, Dimas dan Tomy akan mencoba menjelaskan mengenai perbedaan dari kopi robusta dan arabica.</div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Produk kami</h2>
                <div class="text">Kami menyediakan produk-produk terbaik hanya untuk Anda.</div>
            </div>

            <div class="row clearfix">
                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/Kopi Arabika - Kenya -Roasted Beans 250 Gram.jpeg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Coffee</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Tommy</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Biji Kopi Khusus</a></h3>
                            <div class="text">Diolah dari biji kopi terbaik dari roastery pribadi kami.</div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/coffee_machine.jpg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Equipments</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Chayuz</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Mesin Kopi</a></h3>
                            <div class="text">Menyediakan berbagai alat kebutuhan Anda untuk meracik kopi secara mandiri.</div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInRight">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/coffee_filter.jpg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Filter</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Mike</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Penyaring Kopi</a></h3>
                            <div class="text">Temukan filter kopi berkualitas tinggi dalam toko kami.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section bg7">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/1.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/2.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/3.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/4.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/5.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/6.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/7.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/8.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/9.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/10.png') ?>" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Kabar Kopi</h2>
                <div class="text">Kami akan memberitahukan produk terbaru dari kami setiap minggunya.</div>
            </div>
            <div class="subscribe-form">
                <form method="post" action="http://t.commonsupport.com/lescons/contact.html">
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Masukan email anda" required="">
                        <button type="submit" class="theme-btn btn-style-one">Berlangganan <i class="fa fa-angle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

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
                                    <a href="<?php echo site_url('home/index'); ?>"><img src="<?php echo base_url('/assets/images/logo.png') ?>"/></a>
                                </div>
                                <div class="text">Skynine Coffee adalah coffee shop sekaligus roastery
                                    yang berlokasi di Tekno Park, Tangerang. Kami menyediakan
                                    biji kopi terbaik yang langsung diolah dari roastery kami.</div>
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> <span>Hubungi Kami :</span> +62 857 1488 9509</li>
									<li><i class="fa fa-phone"></i> <span>Atau :</span> +62 858 4140 2758</li>
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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li> 
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li> 
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>