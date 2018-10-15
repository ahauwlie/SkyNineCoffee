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
                        <li><a href="<?php echo site_url('auth/login/index'); ?>"><i class="fa fa-user"></i> Login / Sign Up</a></li>
                    </ul>
                </div>

                <div class="logo-outer">
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url('/assets/images/logo1.png') ?>"/></a>
                        <a href="#"><img src="<?php echo base_url('/assets/images/logo2.png') ?>"/></a>
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
                                        <a href="#" title="Fashion & Accessories" class="link-term mercado-item-title">Purchase/Shop</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content">
                                                <div class="row">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Home</h2>
                                                            <ul data-menuname="Men Fashion">
                                                                <li class="menu-item"><a href="index-2.html" class="link-term">Home 1</a></li>
                                                                <li class="menu-item"><a href="home-02.html" class="link-term">Home 2</a></li>
                                                                <li class="menu-item"><a href="home-03.html" class="link-term">Home 3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Blog pages</h2>
                                                            <ul data-menuname="Blog pages">
                                                                <li class="menu-item"><a href="blog.html" class="link-term">Blog Left Sidebar</a></li>
                                                                <li class="menu-item"><a href="blog-right.html" class="link-term">Blog Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="blog-post.html" class="link-term">Single Left Sidebar</a></li>
                                                                <li class="menu-item"><a href="blog-post-right.html" class="link-term">Single Right Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Inner pages</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="login.html" class="link-term">Login</a></li>
                                                                <li class="menu-item"><a href="about-us.html" class="link-term">About Us</a></li>
                                                                <li class="menu-item"><a href="contact-us.html" class="link-term">Contact Us</a></li>
                                                                <li class="menu-item"><a href="checkout.html" class="link-term">Check Out</a></li>
                                                                <li class="menu-item"><a href="shopping-cart.html" class="link-term">Shopping Cart</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Inner pages</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="grid-full.html" class="link-term">Grid No Sidebar</a></li>
                                                                <li class="menu-item"><a href="grid.html" class="link-term">Grid Left Sidebar</a></li>
                                                                <li class="menu-item"><a href="grid-right-sidebar.html" class="link-term">Grid Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="list.html" class="link-term">List Left Sidebar</a></li>
                                                                <li class="menu-item"><a href="list-right-sidebar.html" class="link-term">List Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="detail.html" class="link-term">Detail Right Sidebar</a></li>
                                                                <li class="menu-item"><a href="detail-left.html" class="link-term">Detail Left Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-advance-product margin-top-12">
                                                            <div class="product product-style-1">
                                                                <div class="product-thumnail">
                                                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim ">
                                                                        <figure><img src="assets/images/mega_accessories_pr1.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim "></figure>
                                                                    </a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="#" class="product-name"><span>T-Shirt Raw Hem Organic Boro Constrast Denim </span></a>
                                                                    <div class="wrap-btn">
                                                                        <a href="#" class="product-link">view more<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-gird-banner">
                                                    <div class="grid-banner-item">
                                                        <div class="megamenu-banner">
                                                            <a href="#" class="link-banner banner-effect-3">
                                                                <figure><img src="<?php echo site_url('/assets/images/1.jpg'); ?>"></figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="grid-banner-item">
                                                        <div class="megamenu-banner">
                                                            <a href="#" class="link-banner banner-effect-3">
                                                                <figure><img src="<?php echo site_url('/assets/assets/images/mega_accessories_2.jpg'); ?>" alt=""></figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="grid-banner-item">
                                                        <div class="megamenu-banner">
                                                            <a href="#" class="link-banner banner-effect-3">
                                                                <figure><img src="<?php echo site_url('/assets/assets/images/mega_accessories_3.jpg'); ?>" alt=""></figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Furnitures & Home decors" class="link-term mercado-item-title">Events</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-526 bg-furniture-decor" >
                                                <div class="row">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Badroom</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Living Room</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sweaters</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jeans</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Pants</a><span class="nav-label new-label">new</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Skirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Bedroom</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5-2">
                                                        <div class="wrap-banner mg-position-01 banner-style-1 ">
                                                            <h3 class="banner-title">Fresh Look</h3>
                                                            <h4 class="sub-title">We’ll Make Your office more comfortablet</h4>
                                                            <a href="#" class="btn banner-link">Shop now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-top-34" >
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Dining room</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Accessories</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Digital & Electronics" class="link-term mercado-item-title">Article</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-526 bg-digital-electronic">
                                                <div class="row">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Smartphone & Tablet</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Laptop & Computer</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sweaters</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jeans</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Pants</a><span class="nav-label new-label">new</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Skirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Sound & Audio</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row margin-top-34">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Game & Consoles</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Printer & Ink</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Tools & Equipments" class="link-term mercado-item-title" >Videos</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content">

                                                <div class="row">

                                                    <div class="col-lg-3">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Men's Fashion</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Footies & Rompersrs</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Women's Fashion</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sweaters</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jeans</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Pants</a><span class="nav-label new-label">new</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Skirts</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Activewear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Girl's fashion</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Footies & Rompers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Boy's Fashion</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Footies & Rompers</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Swimwear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="megamenu-banner without-col grid-two-bn-01">
                                                            <a href="#" class="link-banner banner-effect-3">
                                                                <figure ><img src="assets/images/megamenu_tool_equiment_banner_1.jpg" alt="" width="740" height="210"></figure>
                                                            </a>
                                                        </div>
                                                        <div class="megamenu-banner without-col grid-two-bn-02">
                                                            <a href="#" class="link-banner banner-effect-3">
                                                                <figure ><img src="assets/images/megamenu_tool_equiment_banner_2.jpg" width="370" height="210" alt=""></figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Kid’s Toys" class="link-term mercado-item-title">Contact Us</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content min-height-460 bg-kidtoy">
                                                <div class="row">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Toy Kid’s & Baby</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sweaters</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jeans</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Pants</a><span class="nav-label new-label">new</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Skirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Accessories</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Clothing & Shoes</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrap-banner banner-style-2 mg-position-02">
                                                    <h3 class="banner-title">Baby and Kids Toothcare</h3>
                                                    <h4 class="sub-title">3 simple steps and products to help along the way</h4>
                                                    <a href="#" class="btn banner-link">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="#" title="Organics & Spa" class="link-term mercado-item-title">About Us</a>
                                        <div class="wrap-megamenu">
                                            <div class="megamenu-content">
                                                <div class="row">
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Spa & Beauty Salon</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Foot Massage</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Body scrub</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Facial Spa</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Oil Bath</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Pants</a><span class="nav-label new-label">new</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Skirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Accessories</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Organics</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Fruit Soup</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Red Bean Soup</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Chowder</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Kwait Soup</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Clothing & Shoes</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear & Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title">Functional Food</h2>
                                                            <ul>
                                                                <li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Jackets &amp; Coats</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Sleepwear &amp; Robes</a></li>
                                                                <li class="menu-item"><a href="#" class="link-term">Bloomers, Diaper Covers</a></li>
                                                            </ul>
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
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/3.jpg'); ?>);">
        <div class="auto-container">
            <h1>About us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>About us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="row clearfix">
               <div class="image-column col-md-6 col-sm-12 col-xs-12">
                   <div class="inner-column">
                       <div class="image-box wow slideInLeft"><a href="<?php echo base_url('/assets/images/resource/history-image.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?php echo base_url('/assets/images/resource/history-image.jpg') ?>"/></a></div>
                   </div>
                </div>

                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                   <div class="inner-column">
                       <h2>Sejarah Skynine Coffee</h2>
                       <div class="text">The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout this is required when, for example, the final text is not yet available dummy text is also known as 'fill text' it is said that song composers.</div>
                       <div class="btn-box">
                           <a href="contact.html" class="theme-btn btn-style-four">Contact us</a>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    <!--End History Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section" style="background-image: url(<?php echo base_url('assets/images/background/1.jpg'); ?>);">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon flaticon-left-quote"></span>
                        <div class="text">Now the world don't move to the beat of just one drum what might be right for you may not be right for some the biggest gift would be from me and the card attached would say thank you</div>
                        <div class="info">
                            <h4 class="name">Jalen Newman</h4>
                            <span class="designation">Art Director</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon flaticon-left-quote"></span>
                        <div class="text">Now the world don't move to the beat of just one drum what might be right for you may not be right for some the biggest gift would be from me and the card attached would say thank you</div>
                        <div class="info">
                            <h4 class="name">Jalen Newman</h4>
                            <span class="designation">Art Director</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon flaticon-left-quote"></span>
                        <div class="text">Now the world don't move to the beat of just one drum what might be right for you may not be right for some the biggest gift would be from me and the card attached would say thank you</div>
                        <div class="info">
                            <h4 class="name">Jalen Newman</h4>
                            <span class="designation">Art Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center wow fadeInDown">
                <h2>Tim Skynine Coffee</h2>
                <div class="text">The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum <br> is that the text does not attract attention</div>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                        	<a href="<?php echo base_url('/assets/images/resource/team-1.jpg') ?>" class="lightbox-image" data-fancybox="team"><img src="<?php echo base_url('/assets/images/resource/team-1.jpg') ?>" alt=""></a>
                            <ul class="social-links">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4 class="name"><a href="contact.html">Cayuz Canisius</a></h4>
                            <span class="designation">Creative Director</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image-box">
                        	<a href="<?php echo base_url('/assets/images/resource/team-2.jpg') ?>" class="lightbox-image" data-fancybox="team"><img src="<?php echo base_url('/assets/images/resource/team-2.jpg') ?>" alt=""></a>
                            <ul class="social-links">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4 class="name"><a href="contact.html">Helen Judy</a></h4>
                            <span class="designation">Ecommerce Expert</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image-box">
                        	<a href="<?php echo base_url('/assets/images/resource/team-3.jpg') ?>" class="lightbox-image" data-fancybox="team"><img src="<?php echo base_url('/assets/images/resource/team-3.jpg') ?>" alt=""></a>
                            <ul class="social-links">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4 class="name"><a href="contact.html">Jasmine Mike</a></h4>
                            <span class="designation">Product Manager</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-md-3 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-box">
                        	<a href="<?php echo base_url('/assets/images/resource/team-4.jpg') ?>" class="lightbox-image" data-fancybox="team"><img src="<?php echo base_url('/assets/images/resource/team-4.jpg') ?>" alt=""></a>
                            <ul class="social-links">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4 class="name"><a href="contact.html">Tommy Tom</a></h4>
                            <span class="designation">Team Lead</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->

     <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column footer-column col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget about-widget">
                            <div class="widget-content">
                                <div class="footer-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt=""></a></div>
                                <div class="text">The movie star the professor and mary ann here on gilligans Isle you wanna be where you can see our troubles.</div>
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> <span>Call us :</span> +2 5600 900 200</li>
                                    <li><i class="fa fa-envelope-open-o"></i> <span>Email :</span>  getsupport@mail.com</li>
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
                                    <h2 class="widget-title">Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Collections</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Faq’s</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Information</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Returns & Exchange</a></li>
                                            <li><a href="#">Security</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Help</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Payment Options</a></li>
                                            <li><a href="#">Cancellations</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Shipping</a></li>
                                            <li><a href="#">Delivery</a></li>
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
                        <div class="copyright">© 2018 <a href="index-2.html">Les Cons.</a> All rights reserved.</div>
                    </div>
                    <div class="pull-right clearfix">
                        <div class="payment-box">
                            <h4>Payment :</h4>
                            <a href="#"><img src="images/resource/payments-options.png" alt=""></a>
                        </div>

                        <div class="social-links">
                            <h4>Connect :</h4>
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

<!-- Mirrored from t.commonsupport.com/lescons/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Sep 2018 17:30:50 GMT -->
</html>