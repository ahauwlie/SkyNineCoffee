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

    <body style="background-image: url(<?php echo base_url('assets/images/background/blue.jpg'); ?>);">
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!--Header Span-->
            <div class="header-span"></div>
            <?php echo $preloader; ?>

            <!--Page Title-->
            <section class="page-title">
                <div class="auto-container">
                    <h1>Contact us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home </a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
                <div class="auto-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5072390908167!2d106.67931841447624!3d-6.328255095420276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e51eb777b679%3A0x597b2bb1c2ca8b4a!2sSky+Nine+Coffee!5e0!3m2!1sen!2sid!4v1541673369864" style="width:100%; height:500px;" style="border:0" allowfullscreen></iframe>
                </div>
            </section>
            <!--End Page Title-->

            <?php echo $footer; ?>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
        <?php echo $js; ?>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
        <!--End Google Map APi-->
    </body>
</html>