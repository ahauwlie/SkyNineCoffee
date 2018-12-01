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

    <!-- selamat datang loginers -->
    <!-- <?php if ($this->session->userdata('login')) { ?>
        <?php if($active) { ?>
            <li class="nav-item dropdown bg7">
                <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-account-circle profile-pic"></i>
                    click sini<br>
                    click sini<br>
                    click sini<br>
                </a>
                <div class="dropdown-menu dropdown-menu-left animated zoomIn">
                    <ul class="dropdown-user">
                        <li><a>Selamat datang <b><?php echo $full_name_us;?></b></a></li>
                        <?php 
                            $session = $this->session->userdata('login');
                            $id_ug = $session['id_ug'];
                            if($id_ug == 1){
                                echo '<a href="Home_admin">Kembali ke panel Admin</a>';
                            }
                        ?>
                        <li><a href="<?php echo site_url('login/logout'); ?>">Keluar </a></li>
                    </ul>
                </div>
            </li>
        <?php } else {?>
            <li>Akun belum aktif, silahkan cek email : <b><?php echo $email_us;?></b></li>
        <?php } ?>
    <?php } ?> -->
    <!-- selesai -->

    <!--Main Slider-->
    <section class="main-slider with-border">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="/assets/images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo base_url('/assets/images/main-slider/sky1.jpg') ?>"> 


						<div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:0;z:0;x:1000;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img.png') ?>"></figure>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-125','-125','-90','-90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>Temukan kami:</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-15','-15','-15','-15']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Nikmati secangkir kopi <br> dari biji berkualitas terbaik.</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['120','120','90','90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/list'); ?>" class="theme-btn btn-style-one">Klik disini <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo base_url('/assets/images/main-slider/sky2.jpg') ?>"> 

                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:-1000;z:0;rX:0deg;rY:[-100%];rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-8.png') ?>"></figure>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="image"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['210','210','210','210']"
                        data-voffset="['0','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']"
                        data-frames='[{"from":"y:1000;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <figure class="image mobile-hidden"><img alt="" src="<?php echo base_url('/assets/images/main-slider/content-img-9.png') ?>"></figure>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-125','-125','-90','-90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h4>Dapatkan diskon 25% untuk</h4>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-15','-15','-15','-15']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Setiap pembelian kopi berkualitas<br> dari roaster terbaik.</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['120','120','90','90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="link-box">
                                <a href="<?php echo site_url('shop/index'); ?>" class="theme-btn btn-style-one">Klik disini <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Testimonial Section -->
    <section class="testimonial-section bg8">
        <div class="auto-container">
            <div class="testimonial-carousel owl-carousel owl-theme">

                <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/0ctF0lmPM1M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">BREWCODE adalah sebuah talkshow yang akan menjawab dan membahas berbagai pertanyaan seputar kopi. Di episode ini, Dimas dan Tomy akan mencoba menjawab beberapa pertanyaan dari para teman kopi.</div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/xOWlvmBFoQI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">
                                <p>
                                    Ini cara membuat kopi manual brew dengan metode syphon.
                                    <br>
                                    Jika Anda tertarik dengan kopi kami,
                                    jangan ragu untuk menghubungi tim pemasaran kami:
                                    📱 +62 815-1798-0622 (Firman)
                                    📱 ‭‭+62 878-7768-9782 (Oscar)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <iframe class="col-sm-8" width="560" height="350" src="https://www.youtube.com/embed/bMVQeWOWyQQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="text col-sm-4">BREWCODE adalah sebuah talkshow yang akan menjawab dan membahas berbagai pertanyaan seputar kopi. Di episode perdana ini, Dimas dan Tomy akan mencoba menjelaskan mengenai perbedaan dari kopi robusta dan arabica.</div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Produk kami</h2>
                <div class="text">Kami menyediakan produk-produk terbaik hanya untuk Anda.</div>
            </div>

            <div class="row clearfix">
                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/Kopi Arabika - Kenya -Roasted Beans 250 Gram.jpeg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Kopi</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Tommy</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Biji Kopi Khusus</a></h3>
                            <div class="text">Diolah dari biji kopi terbaik dari roastery pribadi kami.</div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/coffee_machine.jpg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Mesin_kopi</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Chayuz</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Mesin Kopi</a></h3>
                            <div class="text">Menyediakan berbagai alat kebutuhan Anda untuk meracik kopi secara mandiri.</div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInRight">
                        <div class="image-box">                         
                            <div class="image"><a href="blog-single.html"><img src="<?php echo base_url('/assets/images/Skynine/coffee_filter.jpg') ?>" alt=""></a>
                            </div>
                            <span class="tag">Filter</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-user-o"></i> by Mike</li>
                                <li><i class="fa fa-clock-o"></i> 7 Oct 2017</li>
                            </ul>
                            <h3><a href="blog-single.html">Penyaring Kopi</a></h3>
                            <div class="text">Temukan filter kopi berkualitas tinggi dalam toko kami.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section bg7">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/1.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/2.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/3.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/4.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/5.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/6.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/7.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/8.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/9.png') ?>" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?php echo base_url('/assets/images/clients/10.png') ?>" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Kabar Kopi</h2>
                <div class="text">Kami akan memberitahukan produk terbaru dari kami setiap minggunya.</div>
            </div>
            <div class="subscribe-form">
                <form method="post" action="http://t.commonsupport.com/lescons/contact.html">
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Masukan email anda" required="">
                        <button type="submit" class="theme-btn btn-style-one">Berlangganan <i class="fa fa-angle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->
    <?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>