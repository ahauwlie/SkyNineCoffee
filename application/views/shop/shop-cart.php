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
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th class="prod-column">Produk</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Harga</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb"><a href="#"><img src="images/resource/prod-thumb-1.jpg" alt=""></a></figure>
                                                <h3 class="prod-title">Pair Waterbottle</h3>
                                            </div>
                                        </td>
                                        <td class="price">$65.10</td>
                                        <td class="qty"><div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus">-</button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus">+</button></div></div></td>
                                        <td class="sub-total">$65.10</td>
                                        <td class="remove"><a href="#" class="remove-btn">x</a></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb"><a href="#"><img src="images/resource/prod-thumb-1.jpg" alt=""></a></figure>
                                                <h3 class="prod-title">Backpacks</h3>
                                            </div>
                                        </td>
                                        <td class="price">$315.00</td>
                                        <td class="qty"><div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus">-</button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus">+</button></div></div></td>
                                        <td class="sub-total">$315.00</td>
                                        <td class="remove"><a href="#" class="remove-btn">x</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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
                                    <li class="clearfix"><span class="col col-title">Sub-total</span><span class="col">$380.10</span></li>
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
                                <li class="clearfix"><span class="col col-title">Total</span><span class="col">$380.10</span></li>
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