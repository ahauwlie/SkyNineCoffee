<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_import_admin extends CI_Controller {
  private $filename = "import_data"; // Kita tentukan nama filenya
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('barang_import');
  }
  
  public function index(){
    $data['import'] = $this->barang_import->view();
    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
    $this->load->view('admin/barang/view_import_barang', $data);
  }
  
  public function form(){
    $data = array(); // Buat variabel $data sebagai array
    
    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
      $upload = $this->barang_import->upload_file($this->filename);
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
        
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
        $data['sheet'] = $sheet; 
      }else{ // Jika proses upload gagal
        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('admin/barang/form', $data);
  }
  
  public function import(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    $excelreader = new PHPExcel_Reader_Excel2007();
    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
    
    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
    $data = array();
    
    $numrow = 1;
    foreach($sheet as $row){
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Kita push (add) array data ke variabel data
        array_push($data, array(
          'nama_pr'=>$row['A'], 
          'tipe_pr'=>$row['B'], 
          'harga_pr'=>$row['C'],
          'stock_pr'=>$row['D'], 
          'tag_pr'=>$row['E'],
          'decs_pr'=>$row['F'],
          'img_pr'=>$row['G'],
        ));
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
    $this->barang_import->insert_multiple($data);
    
    redirect("Barang_import_admin"); // Redirect ke halaman awal (ke controller siswa fungsi index)
  }
}