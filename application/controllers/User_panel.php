<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_panel extends CI_Controller {

  public function __construct(){
    parent::__construct();
    
    $this->load->model('user_manage');
  }
  
  public function index(){
    $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
    $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
    $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
    $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
    $this->load->view('user_panel/user_setting', $data);
  }
}