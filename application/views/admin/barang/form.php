<html>
<head>
  <title>Form Import</title>
  
  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</head>
<body>
  <h3>Form Import</h3>
  <hr>
  
  <a href="<?php echo base_url("excel/import_data.xlsx"); ?>">Download Format</a>
  <br>
  <br>
  
  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?php echo base_url("index.php/Barang_import_admin/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">
    
    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Preview">
  </form>
  
  <?php
  if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
    if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }
    
    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='".base_url("index.php/Barang_import_admin/import")."'>";
    
    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
    </div>";
    
    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='9'>Preview Data</th>
    </tr>
    <tr>
      <th>Nama</th>
      <th>Tipe</th>
      <th>Harga</th>
      <th>Stock</th>
      <th>Tag</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
    </tr>";
    
    $numrow = 1;
    $kosong = 0;
    
    // Lakukan perulangan dari data yang ada di excel
    // $sheet adalah variabel yang dikirim dari controller
    foreach($sheet as $row){ 
      // Ambil data pada excel sesuai Kolom
      $nama_pr = $row['A']; 
      $tipe_pr = $row['B']; 
      $harga_pr = $row['C']; 
      $stock_pr = $row['D'];
      $tag_pr = $row['E']; 
      $decs_pr = $row['F']; 
      $img_pr = $row['G'];
      
      // Cek jika semua data tidak diisi
      if(empty($nama_pr) && empty($tipe_pr) && empty($harga_pr) && empty($stock_pr) && empty($tag_pr) && empty($decs_pr) && empty($img_pr))
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Validasi apakah semua data telah diisi
        $nama_pr_td = ( ! empty($nama_pr))? "" : " style='background: #E07171;'"; 
        $tipe_pr_td = ( ! empty($tipe_pr))? "" : " style='background: #E07171;'"; 
        $harga_pr_td = ( ! empty($harga_pr))? "" : " style='background: #E07171;'";
        $stock_pr_td = ( ! empty($stock_pr))? "" : " style='background: #E07171;'"; 
        $tag_pr_td = ( ! empty($tag_pr))? "" : " style='background: #E07171;'"; 
        $decs_pr_td = ( ! empty($decs_pr))? "" : " style='background: #E07171;'";
        $img_pr_td = ( ! empty($img_pr))? "" : " style='background: #E07171;'"; 
        
        // Jika salah satu data ada yang kosong
        if(empty($nama_pr) or empty($tipe_pr) or empty($harga_pr) or empty($stock_pr) or empty($tag_pr) or empty($decs_pr) or empty($img_pr)){
          $kosong++; // Tambah 1 variabel $kosong
        }
        
        echo "<tr>";
        echo "<td".$nama_pr_td.">".$nama_pr."</td>";
        echo "<td".$tipe_pr_td.">".$tipe_pr."</td>";
        echo "<td".$harga_pr_td.">".$harga_pr."</td>";
        echo "<td".$stock_pr_td.">".$stock_pr."</td>";
        echo "<td".$tag_pr_td.">".$tag_pr."</td>";
        echo "<td".$decs_pr_td.">".$decs_pr."</td>";
        echo "<td".$img_pr_td.">".$img_pr."</td>";
        echo "</tr>";
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    
    echo "</table>";
    
    // Cek apakah variabel kosong lebih dari 0
    // Jika lebih dari 0, berarti ada data yang masih kosong
    if($kosong > 0){
    ?>  
      <script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
        
        $("#kosong").show(); // Munculkan alert validasi kosong
      });
      </script>
    <?php
    }else{ // Jika semua data sudah diisi
      echo "<hr>";
      
      // Buat sebuah tombol untuk mengimport data ke database
      echo "<button type='submit' name='import'>Import</button>";
      echo "<a href='".base_url("index.php/Barang_import_admin")."'>Cancel</a>";
    }
    
    echo "</form>";
  }
  ?>
</body>
</html>