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
            <section class="page-title" style="background-image: url(<?php echo base_url('assets/images/background/4new.jpg'); ?>);">
                <div class="auto-container">
                    <h2>Keranjang Belanja</h2>
                    <ul class="bread-crumb1 clearfix">
                        <li><a href="index-2.html">Beranda </a></li>
                        <li>Keranjang Belanja</li>
                    </ul>
                </div>
            </section>
            <!--End Page Title-->

            <!--Cart Section-->
            <section class="cart-section">
                <div class="auto-container">
                    <!--Cart Outer-->
                    <div class="cart-outer">
                        <form action="<?php echo site_url()?>/Shop/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
                        <?php if ($cart = $this->cart->contents()) { ?>
                            <div class="table-outer">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th width="2%">No</th>
                                            <th width="10%">Gambar</th>
                                            <th width="33%">Item</th>
                                            <th width="17%">Harga</th>
                                            <th width="8%">Qty</th>
                                            <th width="20%">Jumlah</th>
                                            <th width="10%">Hapus</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $grand_total = 0;
                                        $i = 1;
                                        foreach ($cart as $item):
                                        $grand_total = $grand_total + $item['subtotal'];
                                    ?>
                                    <tbody>
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                                        <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><img class="img-responsive" src="<?php echo base_url() . 'assets/images/resource/products/'.$item['gambar']; ?>"/></td>
                                            <td><?php echo $item['name']; ?></td>
                                            <td><?php echo number_format($item['price'], 0,",","."); ?></td>
                                            <td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
                                            <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
                                            <td><a href="<?php echo site_url()?>/Shop/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                                        <?php endforeach; ?>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>Total Harga: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
                                            <td colspan="4" align="right">
                                            <a href="<?php echo site_url()?>/Shop/hapus/all" class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
                                            <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
                                            <a href="<?php echo site_url()?>/Shop/check_out"  class ='btn btn-sm btn-primary'>Check Out</a>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php } else
                                    {
                                        echo "<h3>Keranjang Belanja masih kosong</h3>"; 
                                    }   
                                ?>
                            </div>
                        </form>

                        <div class="coupon-outer clearfix">
                            <div class="pull-left">
                                <div class="apply-coupon clearfix">
                                    <div class="form-group clearfix">
                                        <input type="text" name="coupon-code" value="" placeholder="Masukan kode kupon...">
                                    </div>
                                    <div class="form-group clearfix">
                                        <button type="button" class="theme-btn btn-style-three">Teruskan Kode Kupon</button>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group pull-right">
                                <button type="button" class="theme-btn cart-btn btn-style-three">Segarkan Keranjang</button>
                            </div>
                        </div>


                        <div class="row clearfix">                    
                            <div class="column pull-right col-md-5 col-sm-12 col-xs-12">
                                <!--Totals Table-->
                                <ul class="totals-table">
                                    <li class="clearfix"><span class="col col-title">Sub-total</span><span class="col">
                                        <b>Rp <?php echo number_format($grand_total, 0,",","."); ?></b>
                                    </span></li>
                                    <li class="clearfix"><span class="col col-title">Pengiriman</span>
                                    <div class="col">
                                        <div class="shopping-option">
                                            <input type="checkbox" name="free-shipping" id="free-shipping">
                                            <label for="free-shipping">Gratis</label>
                                        </div>
                                        <div class="shopping-option">
                                            <input type="checkbox" name="local-pickup" id="local-pickup">
                                            <label for="local-pickup">Lokal</label>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="clearfix"><span class="col col-title">Diskon</span><span class="col">
                                        <b> %</b>
                                    </span></li>
                                    <li class="clearfix"><span class="col col-title">Total</span><span class="col">
                                        <b>Rp <?php echo number_format($grand_total, 0,",","."); ?></b>
                                    </span></li>
                                </ul>
                                <div class="text-right"><button type="submit" class="theme-btn checkout-btn btn-style-four">Lakukan Pembayaran</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Cart Section -->

            <?php echo $footer; ?>
        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
        <?php echo $js; ?>
    </body>
</html>