<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller
{
	 public function __construct(){
	    parent::__construct();
	    
	    $this->load->model('model_product');
	    $this->load->model('user_manage');
	    $this->load->model('penjualan_manage');
  	}

    public function index() {
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
			        $data['hasil_barang'] = $this->model_product->countRow();
			        $data['hasil_user'] = $this->user_manage->countRow();
			        $data['hasil_penjualan'] = $this->penjualan_manage->countRow();
			        $this->load->view('admin/home/index', $data);
			    }
			}
		}
    }
}