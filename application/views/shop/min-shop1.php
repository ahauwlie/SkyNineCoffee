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
        <video autoplay muted loop class="myVideo">
            <source src="<?php echo base_url('/assets/images/sky1.mov') ?>">
                Your browser does not support HTML5 video.
            </video>
            <!--End Page Title-->

            <!--Sidebar Page Container-->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="shop-list">
                        <div class="row clearfix">

                            <!--content side-->
                            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                <div class="shop-upper-box clearfix">
                                    <div class="items-label pull-left">Pengurutan <?php foreach ($hasil as $row) : ?>
                                                                            <span><?=  $row->num_of_time  ?></span>
                                                                        <?php endforeach; ?> Produk dari yang Termurah
                                        <div class="link-box">
                                            <a href="<?php echo site_url('shop/index'); ?>"><i class="fa fa-th"></i></a>
                                            <a href="<?php echo site_url('shop/list'); ?>" class="active"><i class="fa fa-th-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="sort-by pull-right">
                                        <label class="custom-select">
                                            <select size="1" name="links" onchange="location = this.value;">
                                                <option>Urutkan Harga</option>
                                                <option value="<?php echo site_url('shop/min_pro2'); ?>">Harga Termurah</option>
                                                <option value="<?php echo site_url('shop/max_pro2'); ?>">Harga Tertinggi</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>

                                <!-- Product Block Two -->
                                <?php foreach ($min->result() as $products) : ?>
                                    <div class="product-block-two">
                                        <div class="row clearfix">
                                            <div class="image-box col-md-4 col-sm-4 col-xs-12">
                                                <div class="image wow fadeInLeft">
                                                    <figure><a href="product-details.html">
                                                        <img src="#g" alt="">
                                                            <?php
                                                                $product_image =[
                                                                    'src'  =>'assets/images/resource/products/'.$products->img_pr,
                                                                    'class'=>'img-responsive img-portfolio img-hover',
                                                                    'id'=>'g'
                                                                ];
                                                                echo img($product_image);
                                                            ?>
                                                    </a></figure>
                                                    <span class="tag">Promo!</span>
                                                </div>
                                            </div>
                                            <div class="content-box col-md-8 col-sm-8 col-xs-12">
                                                <div class="inner-box wow fadeInRight">
                                                    <h3><a href="product-details.html"><?=  $products->nama_pr  ?></a></h3>
                                                    <span class="price">Rp. <?=  $products->harga_pr  ?>,-</span>
                                                    <div class="text"><?=  $products->decs_pr  ?>.</div>
                                                    <div class="link-box"><a href="shopping-cart.html" class="theme-btn btn-style-three"><i class="flaticon-shopping-bag"></i> Add to Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!--Sidebar Side-->
                            <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <aside class="sidebar shop-sidebar">
                                    <!--Price Filter Widget-->
                                    <div class="sidebar-widget price-filter-widget">
                                        <div class="sidebar-title"><h2>Skala Harga</h2></div>
                                        <div class="widget-content">
                                            <div class="range-slider-one clearfix">
                                                <div class="price-range-slider"></div>
                                                <div class="clearfix">
                                                    <div class="pull-right">
                                                        <a href="#" class="theme-btn">Saring Harga</a>
                                                    </div>
                                                    <div class="pull-left">
                                                        <div class="title">Harga:</div>
                                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Categories -->
                                    <div class="sidebar-widget categories">
                                        <div class="sidebar-title"><h2>Kategori</h2></div>
                                        <a>
                                            <?php foreach ($starts as $start ) : ?>
                                                <?=  anchor('Shop/showme/'.$start->tipe_pr,$start->tipe_pr,['class'=>'btn btn-default']) ?>
                                            <?php endforeach; ?>
                                        </a>
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