<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
            $this->load->database();
			$this->db->insert('users',$data);
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$aktif = array(
               'active' => 1
            );

			$this->db->where('md5(id)', $key);
			$this->db->update('users', $aktif); //beda nih

			return true;
		}
	}
?>