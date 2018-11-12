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
            <source src="<?php echo base_url('/assets/images/skysky.mov') ?>">
                Your browser does not support HTML5 video.
            </video>
            <!--End Page Title-->

            <!--Sidebar Page Container-->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--content side-->
                        <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="shop-upper-box clearfix">
                                <div class="items-label pull-left">Melihat 1-7 dari 84 Hasil
                                    <div class="link-box">
                                        <a href="<?php echo site_url('shop/index'); ?>" class="active"><i class="fa fa-th"></i></a>
                                        <a href="<?php echo site_url('shop/list'); ?>"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="sort-by pull-right">
                                    <select class="custom-select-box">
                                        <option>Pengurutan Otomatis</option>
                                        <option>Harga: Termurah</option>
                                        <option>Harga: Tertinggi</option>
                                        <option>Murah -> Tinggi</option>
                                        <option>Tinggi -> Murah</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <!-- Product Block -->
                                <div class="product-block col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="image-box">
                                           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/1.jpg') ?>" alt=""></a>
                                           <span class="tag">Promo!</span>
                                           <div class="link-box">
                                            <a href="<?php echo base_url('/assets/images/resource/products/1.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                            <a href="#"><span class="flaticon-like-1"></span></a>
                                            <a href="#"><span class="flaticon-shopping-bag"></span></a>
                                        </div>                       
                                    </div>
                                    <div class="content-box">
                                        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Pair Waterbottle</a></h3>
                                        <span class="price">$65.10</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Block -->
                            <div class="product-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                       <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/2.jpg') ?>" alt=""></a>
                                       <div class="link-box">
                                        <a href="<?php echo base_url('/assets/images/resource/products/2.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                        <a href="#"><span class="flaticon-like-1"></span></a>
                                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                    </div>                       
                                </div>
                                <div class="content-box">
                                    <h3><a href="<?php echo site_url('Shop/cart'); ?>">Small Table</a></h3>
                                    <span class="price"><del>$86.00</del> $82.30</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Block -->
                        <div class="product-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                   <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/3.jpg') ?>" alt=""></a>
                                   <span class="tag">Sale!</span>
                                   <div class="link-box">
                                    <a href="<?php echo base_url('/assets/images/resource/products/3.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                    <a href="#"><span class="flaticon-like-1"></span></a>
                                    <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                                </div>                       
                            </div>
                            <div class="content-box">
                                <h3><a href="<?php echo site_url('Shop/cart'); ?>">Storage Tap</a></h3>
                                <span class="price">$25.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product Block -->
                    <div class="product-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                               <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/5.jpg') ?>" alt=""></a>
                               <div class="link-box">
                                <a href="<?php echo base_url('/assets/images/resource/products/5.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                                <a href="#"><span class="flaticon-like-1"></span></a>
                                <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                            </div>                       
                        </div>
                        <div class="content-box">
                            <h3><a href="<?php echo site_url('Shop/cart'); ?>">Wooden Wallclock</a></h3>
                            <span class="price">$80.00</span>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/7.jpg') ?>" alt=""></a>
                           <span class="tag">Sale!</span>
                           <div class="link-box">
                            <a href="<?php echo base_url('/assets/images/resource/products/7.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                            <a href="#"><span class="flaticon-like-1"></span></a>
                            <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Modern Lamp</a></h3>
                        <span class="price">$172.00</span>
                    </div>
                </div>
            </div>

            <!-- Product Block -->
            <div class="product-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                       <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/8.jpg') ?>" alt=""></a>
                       <div class="link-box">
                        <a href="<?php echo base_url('/assets/images/resource/products/8.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                        <a href="#"><span class="flaticon-like-1"></span></a>
                        <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                    </div>
                </div>
                <div class="content-box">
                    <h3><a href="<?php echo site_url('Shop/cart'); ?>">Water Jug</a></h3>
                    <span class="price"><del>$26.00</del> $22.10</span>
                </div>
            </div>
        </div>

        <!-- Product Block -->
        <div class="product-block col-md-4 col-sm-6 col-xs-12">
            <div class="inner-box">
                <div class="image-box">
                   <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/9.jpg') ?>" alt=""></a>
                   <span class="tag">Sale!</span>
                   <div class="link-box">
                    <a href="<?php echo base_url('/assets/images/resource/products/9.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                    <a href="#"><span class="flaticon-like-1"></span></a>
                    <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
                </div>                       
            </div>
            <div class="content-box">
                <h3><a href="<?php echo site_url('Shop/cart'); ?>">Stylish Pots</a></h3>
                <span class="price"><del>$36.00</del> $30.05</span>
            </div>
        </div>
    </div>

    <!-- Product Block -->
    <div class="product-block col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
            <div class="image-box">
               <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/10.jpg') ?>" alt=""></a>
               <span class="tag">Sale!</span>
               <div class="link-box">
                <a href="<?php echo base_url('/assets/images/resource/products/10.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
                <a href="#"><span class="flaticon-like-1"></span></a>
                <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
            </div>                       
        </div>
        <div class="content-box">
            <h3><a href="<?php echo site_url('Shop/cart'); ?>">Interior Decors</a></h3>
            <span class="price">$40.50</span>
        </div>
    </div>
</div>

<!-- Product Block -->
<div class="product-block col-md-4 col-sm-6 col-xs-12">
    <div class="inner-box">
        <div class="image-box">
           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/12.jpg') ?>" alt=""></a>
           <span class="tag">Sale!</span>
           <div class="link-box">
            <a href="<?php echo base_url('/assets/images/resource/products/12.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
            <a href="#"><span class="flaticon-like-1"></span></a>
            <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
        </div>                       
    </div>
    <div class="content-box">
        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Home Decors</a></h3>
        <span class="price">$18.20</span>
    </div>
</div>
</div>

<!-- Product Block -->
<div class="product-block col-md-4 col-sm-6 col-xs-12">
    <div class="inner-box">
        <div class="image-box">
           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/4.jpg') ?>" alt=""></a>
           <div class="link-box">
            <a href="<?php echo base_url('/assets/images/resource/products/4.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
            <a href="#"><span class="flaticon-like-1"></span></a>
            <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
        </div>                       
    </div>
    <div class="content-box">
        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Home Decor</a></h3>
        <span class="price">$22.10</span>
    </div>
</div>
</div>

<!-- Product Block -->
<div class="product-block col-md-4 col-sm-6 col-xs-12">
    <div class="inner-box">
        <div class="image-box">
           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/6.jpg') ?>" alt=""></a>
           <span class="tag">Sale!</span>
           <div class="link-box">
            <a href="<?php echo base_url('/assets/images/resource/products/6.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
            <a href="#"><span class="flaticon-like-1"></span></a>
            <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
        </div>
    </div>
    <div class="content-box">
        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Wireless Speaker</a></h3>
        <span class="price">$155.70</span>
    </div>
</div>
</div>

<!-- Product Block -->
<div class="product-block col-md-4 col-sm-6 col-xs-12">
    <div class="inner-box">
        <div class="image-box">
           <a href="<?php echo site_url('Shop/cart'); ?>"><img src="<?php echo base_url('/assets/images/resource/products/11.jpg') ?>" alt=""></a>
           <div class="link-box">
            <a href="<?php echo base_url('/assets/images/resource/products/11.jpg') ?>" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-eye-1"></span></a>
            <a href="#"><span class="flaticon-like-1"></span></a>
            <a href="shopping-cart.html"><span class="flaticon-shopping-bag"></span></a>
        </div>                       
    </div>
    <div class="content-box">
        <h3><a href="<?php echo site_url('Shop/cart'); ?>">Plate and Spoon</a></h3>
        <span class="price"><del>$22.00</del> $20.10</span>
    </div>
</div>
</div>
</div>

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
            <ul class="category-list">
                <li><a href="#">Biji Kopi  <span>(50)</span></a></li>
                <li><a href="#">Biji Kopi Khusus   <span>(06)</span></a></li>
                <li><a href="#">Mesin Kopi   <span>(84)</span></a></li>
                <li><a href="#">Penyaring Kopi <span>(70)</span></a></li>
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

<?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>