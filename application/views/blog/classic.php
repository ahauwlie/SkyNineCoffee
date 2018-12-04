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
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/blog.jpg'); ?>);">
        <div class="auto-container">
            <h2>Blog</h2>
            <ul class="bread-crumb1 clearfix">
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
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/author-1.jpg') ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo site_url('blog/single'); ?>">Instances of the unusual word to end</a></div>
                                <div class="post-info"><i class="fa fa-clock-o"></i> 13 Jan 2018</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/author-1.jpg') ?>" alt=""></a></figure>
                                <div class="text"><a href="<?php echo site_url('blog/single'); ?>">The original text remain in the Lorem</a></div>
                                <div class="post-info"><i class="fa fa-clock-o"></i> 25 Feb 2018</div>
                            </article>
                            
                            <article class="post">
                                <figure class="post-thumb"><a href="<?php echo site_url('blog/single'); ?>"><img src="<?php echo base_url('/assets/images/resource/author-1.jpg') ?>" alt=""></a></figure>
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

    <?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>