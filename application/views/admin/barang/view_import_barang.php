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
      <h1>
        Data Tables
        <small>- Daftar Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <a href="<?php echo base_url("index.php/Barang_import_admin/form"); ?>">Import Data</a><br><br>
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Tag</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
            </tr>
            </thead>
            <tbody>
              <?php
                if( ! empty($import)){
                  foreach($import as $data){
                    echo "<tr>";
                    echo "<td>".$data->nama_pr."</td>";
                    echo "<td>".$data->tipe_pr."</td>";
                    echo "<td>".$data->harga_pr."</td>";
                    echo "<td>".$data->stock_pr."</td>";
                    echo "<td>".$data->tag_pr."</td>";
                    echo "<td>".$data->decs_pr."</td>";
                    echo "<td>".$data->img_pr."</td>";
                    echo "</tr>";
                  }
                }else{
                  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
                }
              ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Tag</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
  <div style="display: none">
    <form id="delete-form" method="POST"></form>
  </div>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
