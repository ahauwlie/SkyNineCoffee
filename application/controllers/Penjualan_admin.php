<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('penjualan_manage');
  }
  
  public function index(){
    $this->load->library('session');
    $this->load->helper('url');
    //jika seasson login belum ada maka tampilkan login
    if(!$this->session->userdata('login')){
      $this->load->helper('form');
        $this->load->view('auth/login2');
    }else{
      if($this->session->userdata('login')) {
        $session = $this->session->userdata('login');
        $id_ug = $session['id_ug'];
        if($id_ug == 1){
          $data['penjualan'] = $this->penjualan_manage->getAll();
          $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
          $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
          $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
          $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
          $this->load->view('admin/penjualan/index', $data);
        }
      }
    }
  }

  public function delete($id)
    {
      $this->load->library('session');
      $this->load->helper('url');
      //jika seasson login belum ada maka tampilkan login
      if(!$this->session->userdata('login')){
        $this->load->helper('form');
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          $id_ug = $session['id_ug'];
          if($id_ug == 1){
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $this->penjualan_manage->delete($id);
            }
            redirect(site_url('Penjualan_admin/index'));
          }
        }
      }
    }

    public function detail($id)
    {
      $this->load->library('session');
      $this->load->helper('url');
      //jika seasson login belum ada maka tampilkan login
      if(!$this->session->userdata('login')){
        $this->load->helper('form');
          $this->load->view('auth/login2');
      }else{
        if($this->session->userdata('login')) {
          $session = $this->session->userdata('login');
          $id_ug = $session['id_ug'];
          if($id_ug == 1){
            $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

            $data['penjualan_detail'] = $this->penjualan_manage->getSpecified_detail($id);
            $this->load->view('admin/penjualan/detail', $data);
          }
        }
      }
    }
}