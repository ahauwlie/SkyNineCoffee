<html>
<head>
  <title>IMPORT EXCEL CI 3</title>
</head>
<body>
  <h1>Data Siswa</h1><hr>
  <a href="<?php echo base_url("index.php/Barang_import_admin/form"); ?>">Import Data</a><br><br>
  <table border="1" cellpadding="8">
  <tr>
    <th>Nama</th>
    <th>Tipe</th>
    <th>Harga</th>
    <th>Stock</th>
    <th>Tag</th>
    <th>Deskripsi</th>
    <th>Gambar</th>
  </tr>
  <?php
  if( ! empty($import)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($import as $data){ // Lakukan looping pada variabel siswa dari controller
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
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
  }
  ?>
  </table>
</body>
</html>