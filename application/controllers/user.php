<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
         $this->load->model('auth'); //call model
     }

     public function index()  
     {  
     	$this->load->view('auth/login');  
     }
     public function regis()  
     {  
     	$this->form_validation->set_rules('nama', 'NAMA','required');
     	$this->form_validation->set_rules('username', 'USERNAME','required');
     	$this->form_validation->set_rules('email','EMAIL','required|valid_email');
     	$this->form_validation->set_rules('password','PASSWORD','required');
     	$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
     	if($this->form_validation->run() == FALSE) {
     		$this->load->view('auth/registration');
     	}else{

     		$data['nama']   =    $this->input->post('nama');
     		$data['username'] =    $this->input->post('username');
     		$data['email']  =    $this->input->post('email');
     		$data['password'] =    md5($this->input->post('password'));

     		$this->auth->daftar($data);

     		$pesan['message'] =    "Pendaftaran berhasil";
            $this->load->view('auth/success',$pesan);
     }  
 }
}