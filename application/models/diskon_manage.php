<?php

class Diskon_manage extends CI_Model {
	
		 public function getAll()
	    {
	        return $this->db->get('disc')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('disc', $data);
	    }

	    public function delete($id)
	    {
	        $this->db->delete('disc', array('id_disc' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('disc', array('id_disc' => $id))->row_array();
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('disc', $data, array('id_disc' => $id));
	    }	
}