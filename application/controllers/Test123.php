<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->view('v_register');
    }
    
    public function submit(){
        $this->load->helper(array('form', 'url'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'active' => 0
        );
        $this->load->model('auth');
        $id = $this->auth->add_account($data);
        
        $encrypted_id = md5($id);
        
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com";
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "guencyguen@gmail.com";
        $config['smtp_pass']= "belindoott2525";
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
            
        $this->email->initialize($config);
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("Verifikasi Akun");
        $this->email->message(
            "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
            site_url("register/verification/$encrypted_id")
        );
        
        if($this->email->send())
        {
            echo "Berhasil melakukan registrasi, silahkan cek email kamu";
        }else
        {
            echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email";
        }
        
        echo "<br><br><a href='".site_url("Test123/index_login")."'>Kembali ke Menu Login</a>";
    }
    
    public function verification($key)
    {
        $this->load->helper('url');
        $this->load->model('m_register');
        $this->m_register->changeActiveState($key);
        $aktif = array(
               'active' => 1
            );
        $this->db->update('login', $aktif);
        echo "Selamat kamu telah memverifikasi akun kamu";
        echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
    }

    // login nihh
    public function index_login()
    {
            $this->load->library('session');
            $this->load->helper('url');
            if(!$this->session->userdata('login')){
                $this->load->helper('form');
                $this->load->view('v_login');
            }else
            {
                //jika seasson ada direct ke home
                redirect('home','refresh');
            }
    }

    public function logout_login(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('login','refresh');
    }
    // login end

    // login validation
    public function index_valid()
    {
        $this->load->library('form_validation');
        $this->load->helper('url'); 
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {

            redirect('login?gagal=1','refresh');
        }else
        {
            redirect('home','refresh');

        }
    }

    function check_database_valid()
    {
        $this->load->library('session');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('m_login');
        $result = $this->m_login->login($username,$password);

        if($result)
        {
            foreach($result as $row)
            {
                $sess_array = array(
                    'nama'=> $row->nama,
                    'username' => $row->username,
                    'active' => $row->active,
                    'email' => $row->email
                );

                $this->session->set_userdata('login', $sess_array);
            }
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    // login validation end
}

