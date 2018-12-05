<?php
	
	class M_login extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function login($username, $password)
		{
            $this->load->database();
			$this -> db -> select('id_us, username_us, password_us, full_name_us, email_us, active, id_ug, img_us');
			$this -> db -> from('user');
			$this -> db -> where('username_us', $username);
			$this -> db -> where('password_us', md5($password));
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		
	}
?>