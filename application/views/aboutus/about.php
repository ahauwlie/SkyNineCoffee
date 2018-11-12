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
    <?php echo $preloader; ?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/3new.jpg'); ?>);">
        <div class="auto-container">
            <h1 class="spooky-text">
                <span class="spooky-text__letter">S</span>
                <span class="spooky-text__letter">K</span>
                <span class="spooky-text__letter">Y</span>
                <span class="spooky-text__letter">N</span>
                <span class="spooky-text__letter">I</span>
                <span class="spooky-text__letter">N</span>
                <span class="spooky-text__letter">E</span>
            </h1>
            <h2>About us</h2>
            <ul class="bread-crumb1 clearfix">
                <li><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                <li>/ About us</li>
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
                       <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
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
    <section class="testimonial-section" style="background-image: url(<?php echo base_url('assets/images/background/1new.jpg'); ?>);">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon flaticon-left-quote"></span>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</div>
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
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</div>
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
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</div>
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
    <?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>