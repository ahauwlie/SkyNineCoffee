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

    <!--Main Slider-->
    <section class="main-slider with-border">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="container">
                <h1>Edit Profile</h1>
                <hr>
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-3">
                    <div class="text-center">
                      <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                      <h6>Upload a different photo...</h6>
                      
                      <input type="file" class="form-control">
                    </div>
                  </div>
                  
                  <!-- edit form column -->
                  <div class="col-md-9 personal-info">
                    <!-- <div class="alert alert-info alert-dismissable">
                      <a class="panel-close close" data-dismiss="alert">×</a> 
                      <i class="fa fa-coffee"></i>
                      This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div> -->
                    <h3>Personal info</h3>
                    
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Full name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Username:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="password" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">No Hp:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                          <p>*1992-12-28</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Alamat:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input type="button" class="btn btn-primary" value="Save Changes">
                          <span></span>
                          <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <hr>
        </div>
    </section>
    <!--End Main Slider-->
    <?php echo $footer; ?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<?php echo $js; ?>
</body>
</html>