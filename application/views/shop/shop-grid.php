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
    <title>SkyNineCoffee | Shop Grid </title>
    <!-- Stylesheets -->
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
    <!-- Main Header-->
    <header class="main-header alternate">
        <!--Main Box-->
        <div class="main-box">
            <div class="nav-outer clearfix">

        		<!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="dropdown"><a href="#">Home</a>
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

                            <li class="current dropdown"><a href="#">Shop</a>
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

                <div class="logo-outer">
                    <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <div class="social-links ">
                        <span>Follow us :</span>
                        <ul class="social-icon-one">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
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
                        <a href="shopping-cart.html">
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Shop Grid</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Shop</li>
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
                    <div class="shop-upper-box clearfix">
                        <div class="items-label pull-left">Showing 1-7 of 84 results
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/index'); ?>" class="active"><i class="fa fa-th"></i></a>
                                <a href="<?php echo site_url('shop/list'); ?>"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                        <div class="sort-by pull-right">
                            <select class="custom-select-box">
                                <option>Default Sorting</option>
                                <option>Price: Lowest First</option>
                                <option>Price: Highest First</option>
                                <option>Ascending</option>
                                <option>Descending</option>
                            </select>
                        </div>
                    </div>

                    <div class="row clearfix">
                            <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/1.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Pair Waterbottle</a></h3>
                                    <span class="price">$65.10</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/2.jpg" alt=""></a>
                                    <div class="link-box">
                                        <a href="images/resource/products/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Small Table</a></h3>
                                    <span class="price"><del>$86.00</del> $82.30</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/3.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Storage Tap</a></h3>
                                    <span class="price">$25.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/5.jpg" alt=""></a>
                                    <div class="link-box">
                                        <a href="images/resource/products/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Wooden Wallclock</a></h3>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/7.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/7.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Modern Lamp</a></h3>
                                    <span class="price">$172.00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/8.jpg" alt=""></a>
                                    <div class="link-box">
                                        <a href="images/resource/products/8.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Water Jug</a></h3>
                                    <span class="price"><del>$26.00</del> $22.10</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/9.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/9.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Stylish Pots</a></h3>
                                    <span class="price"><del>$36.00</del> $30.05</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/10.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/10.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Interior Decors</a></h3>
                                    <span class="price">$40.50</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/12.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/12.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Home Decors</a></h3>
                                    <span class="price">$18.20</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/4.jpg" alt=""></a>
                                    <div class="link-box">
                                        <a href="images/resource/products/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Home Decor</a></h3>
                                    <span class="price">$22.10</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/6.jpg" alt=""></a>
                                    <span class="tag">Sale!</span>
                                    <div class="link-box">
                                        <a href="images/resource/products/6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Wireless Speaker</a></h3>
                                    <span class="price">$155.70</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                	<a href="product-details.html"><img src="images/resource/products/11.jpg" alt=""></a>
                                    <div class="link-box">
                                        <a href="images/resource/products/11.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="product-details.html">Plate and Spoon</a></h3>
                                    <span class="price"><del>$22.00</del> $20.10</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar shop-sidebar">

                        <!--Price Filter Widget-->
                        <div class="sidebar-widget price-filter-widget">
                            <div class="sidebar-title"><h2>Filter Price</h2></div>
                            <div class="widget-content">
                                <div class="range-slider-one clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-right">
                                            <a href="#" class="theme-btn">Filtter</a>
                                        </div>
                                        <div class="pull-left">
                                            <div class="title">Price:</div>
                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                        <!-- Colors -->
                        <div class="sidebar-widget colors">
                            <div class="sidebar-title"><h2>Colors</h2></div>
                            <ul class="category-list">
                                <li><a href="#">Black  <span>(06)</span></a></li>
                                <li><a href="#">Yellow   <span>(84)</span></a></li>
                                <li><a href="#">Red   <span>(70)</span></a></li>
                                <li><a href="#">Blue <span>(26)</span></a></li>
                                <li><a href="#">Brown    <span>(30)</span></a></li>
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
    <!-- End Sidebar Page Container -->

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
</html>