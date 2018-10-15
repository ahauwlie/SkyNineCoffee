<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Register extends CI_Controller {

    public function index()
    {
		$this->load->helper('form');
		$this->load->view('auth/registration');
	}
	
	public function submit(){
		//passing post data dari view
		$this->load->helper(array('form', 'url'));
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		
		//memasukan ke array
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
			'no_telp' => $no_telp,
			'active' => 0
		);
		//tambahkan akun ke database
		$this->load->model('auth/m_register');
		$id = $this->m_register->add_account($data);
		
		//enkripsi id
		$encrypted_id = md5($id);
		
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "400";
		$config['smtp_user']= "skynine.coffee.id@gmail.com"; // isi dengan email kamu
		$config['smtp_pass']= "skynine123"; // isi dengan password kamu
		$config['crlf']="\r\n"; 
		$config['newline']="\r\n"; 
		$config['wordwrap'] = TRUE;
		//memanggil library email dan set konfigurasi untuk pengiriman email
			
		$this->email->initialize($config);
		//konfigurasi pengiriman
		$this->email->from($config['smtp_user']);
		$this->email->to($email);
		$this->email->subject("Verifikasi Akun");
		$this->email->message(
			"terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
			site_url("auth/register/verification/$encrypted_id")
		);
		
		if($this->email->send())
		{
			echo "Berhasil melakukan registrasi, silahkan cek email kamu";
		}else
		{
			echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
		}
		
		echo "<br><br><a href='".site_url("home")."'>Back to Home Page</a>";
	}
	
	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('auth/m_register');
		$this->m_register->changeActiveState($key);
		$aktif = array(
               'active' => 1
            );
		$this->db->update('users', $aktif);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url("auth/login")."'>Kembali ke Menu Login</a>";
	}
}

