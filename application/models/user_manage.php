<?php

class User_manage extends CI_Model {
	
		 public function getAll()
	    {
	        return $this->db->get('user')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('user', $data);
	    }

	    public function delete($id)
	    {
	        $this->db->delete('user', array('id_us' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('user', array('id_us' => $id))->row_array();
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('user', $data, array('id_us' => $id));
	    }	

	    public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM user WHERE id_ug = 4");
	     	return $query->result();
    	}
}