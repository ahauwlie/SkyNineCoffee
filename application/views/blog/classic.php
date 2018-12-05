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
                    <?php foreach ($artikel as $row) : ?>
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">                         
                                    <div class="image">
                                        <a>
                                            <img src="#g" alt="">
                                            <?php
                                                $product_image =[
                                                    'src'  =>'assets/images/resource/artikel/'.$row->thumb_ar,
                                                    'class'=>'img-responsive img-portfolio img-hover',
                                                    'id'=>'g'
                                                ];
                                                echo img($product_image);
                                            ?>
                                        </a>
                                    </div>
                                    <span class="tag"><?=  $row->tag_ar  ?></span>
                                </div>
                                <div class="lower-content">
                                    <ul class="info">
                                        <li><i class="fa fa-user-o"></i> <?=  $row->sumber_ar  ?></li>
                                        <li><i class="fa fa-clock-o"></i> <?=  $row->date_ar  ?></li>
                                    </ul>
                                    <h3></i> <?=  $row->judul_ar  ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="items-label pull-left">Melihat <button class="btn btn-info"><h4><b><?php echo $links; ?></b></h4></button> dari 
                        <?php foreach ($hasil as $row) : ?>
                            <span><?=  $row->num_of_time  ?></span>
                        <?php endforeach; ?> Hasil
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent Posts</h2></div>
                            <?php foreach (array_slice($ar_side->result(), 0, 3) as $start ) : ?>
                                <article class="post">
                                    <figure class="post-thumb">
                                        <a>
                                            <img src="#j" alt="">
                                            <?php
                                                $u_image =[
                                                    'src'  =>'assets/images/resource/artikel/'.$start->thumb_ar,
                                                    'class'=>'img-responsive img-portfolio img-hover',
                                                    'id'=>'j'
                                                ];
                                                echo img($u_image);
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="text"><?=  $start->judul_ar  ?></div>
                                    <div class="post-info"><i class="fa fa-clock-o"></i> <?=  $start->date_ar  ?></div>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar-widget">
                            <div class="sidebar-title"><h2>tags</h2></div>
                            <a>
                                <?php foreach ($starts1 as $start ) : ?>
                                    <?=  anchor('Blog/showme/'.$start->tag_ar,$start->tag_ar,['class'=>'btn btn-default']) ?>
                                <?php endforeach; ?>
                            </a>
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