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
                      <?php  
                        $session = $this->session->userdata('login');
                        $foto = $session['img_us'];
                      ?>
                      <img src="<?php echo base_url('assets/images/resource/photo_user/'.$foto) ?>" class="avatar img-circle" alt="avatar">
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
                    
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Full name:</label>
                        <div class="col-lg-8">
                          <input name="fnama" id="fnama" class="form-control" type="text" value="<?php echo $user['full_name_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Username:</label>
                        <div class="col-lg-8">
                          <input name="uname" id="uname" class="form-control" type="text" value="<?php echo $user['username_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-8">
                          <input name="pass" id="pass" class="form-control" type="password" value="<?php echo $user['password_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                          <input name="email" id="email" class="form-control" type="text" value="<?php echo $user['email_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">No Hp:</label>
                        <div class="col-lg-8">
                          <input name="hp" id="hp" class="form-control" type="text" value="<?php echo $user['phone_num_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                        <div class="col-lg-8">
                          <input name="ultah" id="ultah" class="form-control" type="text" value="<?php echo $user['date_birth_us']; ?>">
                          <p>*1992-12-28</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Alamat:</label>
                        <div class="col-lg-8">
                          <input name="alamat" id="alamat" class="form-control" type="text" value="<?php echo $user['address_us']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <button class="btn btn-primary"> Ubah</button>
                          <span></span>
                          <a href="<?php echo site_url('Home_log'); ?>" class="btn btn-danger">Batal</a>
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