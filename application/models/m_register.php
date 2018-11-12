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
	}
?>