<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login extends CI_Controller {

    public function index()
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
                        redirect('Home_admin','refresh');
                    }
                    else if($id_ug == 2){
                        redirect('Blog','refresh');
                    }
                    else if($id_ug == 3){
                        redirect('Video','refresh');
                    }
                    else{
                        redirect('Home_log','refresh');
                    }
                }
            }
    }

    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('Home/index','refresh');
    }
}