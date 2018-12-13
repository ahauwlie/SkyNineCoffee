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
                        <div class="image wow fadeIn">
                            <img src="<?php echo base_url('assets/images/resource/artikel/'.$lol['thumb_ar']) ?>" alt="">
                        </div>
                        <span class="tag"><?php echo $lol['tag_ar']; ?></span>
                    </div>

                    <div class="lower-content">
                        <ul class="info">
                            <li><i class="fa fa-user-o"></i> <?php echo $lol['sumber_ar']; ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php echo $lol['date_ar']; ?></li>
                        </ul>
                        <div class="text">
                            <p><?php echo $lol['isi_ar']; ?></p>
                        </div>
                    </div>
                </div>
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
<script>
    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>
</body>
</html>