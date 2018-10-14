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
        <title>SkyNineCoffee | Shop Cart </title>
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

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/5.jpg);">
    <div class="auto-container">
        <h1>Cart</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home </a></li>
            <li>Cart</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Cart Section-->
<section class="cart-section">
    <div class="auto-container">

        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th class="prod-column">Product</th>
                            <th>&nbsp;</th>
                            <th class="price">Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td colspan="2" class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="images/resource/prod-thumb-1.jpg" alt=""></a></figure>
                                    <h3 class="prod-title">Pair Waterbottle</h3>
                                </div>
                            </td>
                            <td class="price">$65.10</td>
                            <td class="qty"><div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus">-</button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus">+</button></div></div></td>
                            <td class="sub-total">$65.10</td>
                            <td class="remove"><a href="#" class="remove-btn">x</a></td>
                        </tr>

                        <tr>
                            <td colspan="2" class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="images/resource/prod-thumb-1.jpg" alt=""></a></figure>
                                    <h3 class="prod-title">Backpacks</h3>
                                </div>
                            </td>
                            <td class="price">$315.00</td>
                            <td class="qty"><div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus">-</button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus">+</button></div></div></td>
                            <td class="sub-total">$315.00</td>
                            <td class="remove"><a href="#" class="remove-btn">x</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="coupon-outer clearfix">
                <div class="pull-left">
                    <div class="apply-coupon clearfix">
                        <div class="form-group clearfix">
                            <input type="text" name="coupon-code" value="" placeholder="Enter Coupon Code...">
                        </div>
                        <div class="form-group clearfix">
                            <button type="button" class="theme-btn btn-style-three">Apply Coupon</button>
                        </div>
                    </div>

                </div>
                <div class="form-group pull-right">
                    <button type="button" class="theme-btn cart-btn btn-style-three">Update Cart</button>
                </div>
            </div>


            <div class="row clearfix">                    
                <div class="column pull-right col-md-5 col-sm-12 col-xs-12">
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li class="clearfix"><span class="col col-title">Sub-total</span><span class="col">$380.10</span></li>
                        <li class="clearfix"><span class="col col-title">Shipping</span>
                        <div class="col">
                            <div class="shopping-option">
                                <input type="checkbox" name="free-shipping" id="free-shipping">
                                <label for="free-shipping">Free Shipping</label>
                            </div>
                            <div class="shopping-option">
                                <input type="checkbox" name="local-pickup" id="local-pickup">
                                <label for="local-pickup">Local Pickup</label>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix"><span class="col col-title">Total</span><span class="col">$380.10</span></li>
                </ul>
                <div class="text-right"><button type="submit" class="theme-btn checkout-btn btn-style-four">Proceed to Checkout</button></div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Cart Section -->

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
                                        <div class="footer-logo">
                                            <a href="#"><img src="<?php echo base_url('/assets/images/logos.png') ?>"/></a>
                                        </div>
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
                                <div class="copyright">© 2018 <a href="<?php echo site_url('home/index'); ?>">Hauw.</a> Yeah!.</div>
                            </div>
                            <div class="pull-right clearfix">
                                <div class="payment-box">
                                    <h4>Payment :</h4>
                                    <a href="#"><img src="<?php echo base_url('/assets/images/resource/payments-options.png') ?>" alt=""></a>
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