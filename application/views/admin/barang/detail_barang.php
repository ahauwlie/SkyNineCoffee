<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('assets/css/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <p class="form-control-static"><?php echo $product['nama_pr']; ?></p>
                </div>
                <div class="form-group">
                    <label>Tipe Barang</label>
                    <p class="form-control-static"><?php echo $product['tipe_pr']; ?></p>
                </div>
                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <p class="form-control-static">Rp <?php echo number_format($product['harga_pr'],0); ?></p>
                </div>
                <div class="form-group">
                    <label>Stock Barang</label>
                    <p class="form-control-static"><?php echo $product['stock_pr']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Tag Barang</label>
                  <p class="form-control-static"><?php echo $product['tag_pr']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Deskripsi Barang</label>
                  <p class="form-control-static"><?php echo $product['decs_pr']; ?></p>
                </div>
                <div class="form-group p-t-4">
                  <label>Photo Barang</label>
                  <p class="form-control-static"><?php echo $product['img_pr']; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <a href="<?php echo site_url('Barang_admin/edit/').$product['id_pr']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Barang_admin/index'); ?>" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>
<script src="<?php echo base_url('/assets/js/admin/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
