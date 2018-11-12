<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Home_log extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        if($this->session->userdata('login'))
        {
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['full_name_us'] = $session['full_name_us'];
			$data['email_us'] = $session['email_us'];
			$data['active'] = $session['active'];
            $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
            $this->load->view('home/home',$data);
        }else{
            redirect('login','refresh');   
        }
    }
}