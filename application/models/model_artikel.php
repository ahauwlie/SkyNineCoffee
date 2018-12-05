<?php

class Model_artikel extends CI_Model {

	    function nyoba($id)
	    {
	        $query = $this->db->get_where('artikel', array('id_ar' => $id));
			return $query->row_array();
	    }

		public function dis_products1()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT tag_ar FROM artikel');
			return $query->result();
		}

		public function showme($tipe_pr)
		{ 
			$query = $this->db->get_where('product', array('tipe_pr' => $tipe_pr));
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM artikel");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('artikel');
    	}

    	public function getAr($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('artikel');

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

    	public function side(){
			$this->db->order_by('date_ar','desc');
			return $this->db->get('artikel');
    	}
}