<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
            $this->load->database();
			$this->db->insert('user',$data);
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$aktif = array(
               'active' => 1
            );

			$this->db->where('md5(id_us)', $key);
			$this->db->update('user', $aktif); //beda nih

			return true;
		}
		public function isDuplicate($username1)
		{     
			$this->db->get_where('user', array('username_us' => $username1), 1);
			return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
		}
		public function isDuplicate1($email)
		{     
			$this->db->get_where('user', array('email_us' => $email), 1);
			return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
		}
	}
?>