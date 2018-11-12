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
    <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/blog2.jpg'); ?>);">
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

    <?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>