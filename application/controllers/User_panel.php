<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_panel extends CI_Controller {

  public function __construct(){
    parent::__construct();
    
    $this->load->model('user_manage');
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
        // $session = $this->session->userdata('login');
        // $id_ug = $session['id_ug'];
        // if($id_ug == 1){
        $id = $this->session->userdata['login']['id_us'];
          if ($_SERVER['REQUEST_METHOD'] == "POST")
          {
              $data = Array (
                'id_us' => $id,
                'username_us' => $this->input->post('uname'),
                'password_us' => $this->input->post('pass'),
                'full_name_us' => $this->input->post('fnama'),
                'email_us' => $this->input->post('email'),
                'phone_num_us' => $this->input->post('hp'),
                'date_birth_us' => $this->input->post('ultah'),
                'address_us' => $this->input->post('alamat')
              );

              $this->user_manage->update(html_escape($data), $id, false);
              redirect(site_url("User_panel"));
          }
          else
          {
              $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
              $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
              $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
              $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
              $data['user'] = $this->user_manage->getSpecified($id);
              $this->load->view('user_panel/user_setting', $data);
          }
        // }
      }
    }
  }
}