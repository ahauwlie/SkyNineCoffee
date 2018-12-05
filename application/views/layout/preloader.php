    <!-- Main Header-->
    <header class="main-header">
        <!--Main Box-->
        <div class="main-box">
            <div class="nav-outer clearfix">

                <div class="iner-box">
                    <ul class="social-icon-one">
                        <!-- <li><a href="<?php echo site_url('login/index'); ?>"><i class="fa fa-user"></i> Masuk/Daftar</a></li> -->

                        <?php if ($this->session->userdata('login')) { ?>
                            <li class="dropdown user user-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php  
                                  $session = $this->session->userdata('login');
                                  $nama = $session['full_name_us'];
                                  $foto = $session['img_us'];
                                  $email = $session['email_us'];
                                ?>
                                <img style="border-radius: 100%;height: 30px;width: 30px;" src="<?php echo base_url('assets/images/resource/photo_user/'.$foto) ?>" alt="">
                                <span class="hidden-xs"><?php echo $nama; ?></span>
                              </a>
                              <?php 
                                $session = $this->session->userdata('login');
                                $active = $session['active'];
                                if($active == 1){
                              ?>
                                  <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                      <img style="border-radius: 100%;height: 100px;width: 100px;" src="<?php echo base_url('/assets/images/resource/photo_user/'.$foto) ?>" alt="">
                                      <p>
                                        <?php echo "Hay, ".strtoupper($nama); ?>
                                        <small><?php echo $email; ?></small>
                                      </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('User_panel'); ?>" class="btn btn-info btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-danger btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                    <?php 
                                        $session = $this->session->userdata('login');
                                        $id_ug = $session['id_ug'];
                                        if($id_ug == 1){
                                            $home = site_url('Home_admin');
                                            echo "<a href='$home'>Kembali ke panel Admin</a>";
                                        }
                                    ?>
                                  </ul>
                              <?php } else { ?>
                                  <ul class="dropdown-menu">
                                    <li>Silahkan lakukan aktivasi pada email anda: <a href="http://www.gmail.com/"><?php echo $email; ?></a></li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('User_panel'); ?>" class="btn btn-info btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-danger btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                  </ul>
                              <?php } ?>
                            </li>
                        <?php } else { ?>
                            <li><a href="<?php echo site_url('login/index'); ?>"><i class="fa fa-user"></i> Masuk/Daftar</a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="logo-outer">
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url('/assets/images/skynine.png') ?>"/></a>
                        <a href="#"><img src="<?php echo base_url('/assets/images/coffee.png') ?>"/></a>
                    </div>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <div class="cart-btn">
                        <a href="<?php echo site_url('shop/cart'); ?>">
                            <span class="count">
                                <?php if ($cart = $this->cart->contents()) { 
                                    $total = 0;
                                    $i = 1;
                                    foreach ($cart as $item):
                                        $total = $total + $i;
                                    endforeach;
                                    echo $total;
                                ?>
                                <?php } else { 
                                    echo " "; 
                                } ?>
                            </span>
                            <span class="icon flaticon-shopping-bag"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!--Mobile Menu-->
            <div class="mobile-menu">
                <div class="nav-header clearfix">
                    <div class="text">Skynine Coffee</div>
                </div>
            </div>
            
        </div>
        <!--End Main Box -->
        
    </header>
    <!--End Main Header -->    

    <!-- bar pilih menu -->
    <div class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <div class="text-center">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                    <?php if ($this->session->userdata('login')) { ?>
                                        <li class="menu-item home-icon">
                                            <a href="<?php echo site_url('Home_log/index'); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                        </li>
                                    <?php } else {?>
                                        <li class="menu-item home-icon">
                                            <a href="<?php echo site_url('Home/index'); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                        </li>
                                    <?php } ?>
                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('shop/index'); ?>" title="Fashion & Accessories" class="link-term mercado-item-title">Toko Kami</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('contactus/index'); ?>" title="Furnitures & Home decors" class="link-term mercado-item-title">Acara Kopi</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('blog/index'); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Artikel</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('video/index'); ?>" title="Tools & Equipments" class="link-term mercado-item-title" >Video</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('contactus/index'); ?>" title="Kid’s Toys" class="link-term mercado-item-title">Hubungi Kami</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children item-megamenu" >
                                        <a href="<?php echo site_url('aboutus/index'); ?>" title="Organics & Spa" class="link-term mercado-item-title">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bar pilihan menu selesai -->