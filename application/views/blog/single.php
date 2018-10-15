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
                            <li class="current dropdown"><a href="#">Pages</a>
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
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/6.jpg'); ?>);">
        <div class="auto-container">
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Blog Detail-->
    <div class="blog-detail">
        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image wow fadeIn"><img src="<?php echo base_url('/assets/images/resource/blog-detail.jpg') ?>" alt=""></div>
                        <span class="tag">Decorations</span>
                    </div>

                    <div class="lower-content">
                        <ul class="info">
                            <li><i class="fa fa-user-o"></i> by Tommy tom</li>
                            <li><i class="fa fa-clock-o"></i> 13 Jan 2018</li>
                        </ul>
                        <h3><a href="<?php echo site_url('blog/single'); ?>">Attract attention to itself or distract the viewer's attention</a></h3>
                        <div class="text">
                            <p>This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout this is required when, for example, the final text is not yet available dummy text is also known as 'fill text' it is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>

                            <p>The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout this is required when, for example, the final text is not yet available dummy text is also known as 'fill text' it is said that song composers of the past used dummy texts as lyrics.</p>

                            <blockquote>The biggest gift would be from me and the card attached would say thank you of the this is the tale of our long long time they'll als have to make thems best of things its an uphill climb realistic so that the layout impression.</blockquote>

                            <p>The rhythm of most European languages in Latin script. The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout this is required when, for example, the final text is not yet available dummy text is also known as 'fill text' it is said that song composers. </p>

                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-12 col-xs-12">
                                        <div class="image wow fadeInLeft"><a href="<?php echo base_url('/assets/images/resource/post-image-1.jpg') ?>" class="lightbox-image" data-fancybox="post"><img src="<?php echo base_url('/assets/images/resource/post-image-1.jpg') ?>" alt=""></a></div>
                                    </div>

                                    <div class="column col-md-6 col-sm-12 col-xs-12">
                                        <div class="image wow fadeInRight"><a href="<?php echo base_url('/assets/images/resource/post-image-2.jpg') ?>" class="lightbox-image" data-fancybox="post"><img src="<?php echo base_url('/assets/images/resource/post-image-2.jpg') ?>" alt=""></a></div>
                                    </div>
                                </div>
                            </div>

                            <p>This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout this is required when, for example, the final text is not yet available dummy text is also known as 'fill text' it is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Options -->
            <div class="post-share-options clearfix">
                <div class="pull-left">
                    <h6>Tags : </h6>
                    <ul class="tags">
                        <li><a href="#">Catalog,</a>,</li>
                        <li><a href="#">Sidebag,</a>,</li>
                        <li><a href="#">Backpacks</a>,</li>
                    </ul>             
                </div>
                <div class="pull-right">
                    <ul class="social-icon-colored">
                        <li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>

            <!--Comments Area-->
            <div class="comments-area">
                <div class="group-title"><h3>Comments (02)</h3></div>
                
                <!--Comment Box-->
                <div class="comment-box">
                    <div class="comment">
                        <div class="author-thumb"><img src="<?php echo base_url('/assets/images/resource/author-1.jpg') ?>" alt=""></div>
                        <div class="comment-inner">
                            <div class="comment-info">Jason Jordan</div>
                            <div class="text">The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does distract posers of the past used dummy texts as lyrics.</div>
                            <a href="#" class="reply-btn">reply</a>
                        </div>
                    </div>
                </div> 

                <!--Comment Box-->
                <div class="comment-box reply-comment">
                    <div class="comment">
                        <div class="author-thumb"><img src="<?php echo base_url('/assets/images/resource/author-1.jpg') ?>" alt=""></div>
                        <div class="comment-inner">
                            <div class="comment-info">Mark Henry</div>
                            <div class="text">The advantage of its Latin origins and the relative meaninglessness of Lorum Ipsum is that the text does distract posers of the past used dummy texts as lyrics.</div>
                            <a href="#" class="reply-btn">reply</a>
                        </div>
                    </div>
                </div>                        
            </div>
            <!--End Comments Area-->

            <!--Comment Form-->
            <div class="comment-form">
                <div class="group-title"><h3>Post a Comment</h3></div>
                <form method="post" action="http://t.commonsupport.com/lescons/blog.html"> 
                    <div class="row clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea name="message" placeholder="Your Comment"></textarea>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required="">
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <button class="theme-btn btn-style-four" type="submit" name="Submit Now">Post Comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Blog Detail -->

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