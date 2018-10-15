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