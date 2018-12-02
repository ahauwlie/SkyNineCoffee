<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_validation extends CI_Controller {
    public function index()
    {
        // load library form validasi , agar login kita lebih aman
        $this->load->library('form_validation');

        $this->load->helper('url'); // digunakan untuk fungsi redirect di bawah

        $this->form_validation->set_rules('username_us', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password_us', 'password', 'trim|required|xss_clean|callback_check_database');// disini terdapat callback : callback_check_database. digunakan untuk memanggil function check_database() dibawah.

        //jika validasi gagal maka akan langsung akan dkembalikan ke login
        if($this->form_validation->run() == FALSE)
        {
            redirect('login?gagal=1','refresh');
        }else
        {
            redirect('Home_log','refresh');

        }
    }

    function check_database()
    {
        $this->load->library('session');
        //validasi kedua dengan cara mengecek database
        $username = $this->input->post('username_us');
        $password = $this->input->post('password_us');

        //query ke database dan memanggil model m_login
        $this->load->model('m_login');
        $result = $this->m_login->login($username,$password);

        //jika hasilnya ada pada maka masukan ke season field nama dan username dengan nama season : login
        if($result)
        {
            foreach($result as $row)
            {
                $sess_array = array(
                    'id_us'=> $row->id_us,
                    'full_name_us'=> $row->full_name_us,
                    'username_us' => $row->username_us,
					'active' => $row->active,
					'email_us' => $row->email_us,
                    'id_ug' => $row->id_ug,
                    'img_us' => $row->img_us
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
}
