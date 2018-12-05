<?php

class Model_artikel extends CI_Model {
	
		public function getAll()
	    {
	        return $this->db->get('product')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('product', $data);
	    }

	    public function delete($id)
	    {
	        $this->db->delete('product', array('id_pr' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('product', array('id_pr' => $id))->row_array();
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('product', $data, array('id_pr' => $id));
	    }
	    
		public function all_products()
		{ 
			$show = $this->db->get('product');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			}
		}

		public function dis_products()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT tipe_pr FROM product');
			return $query->result();
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
		
		public function tambah_order($data)
		{
			$this->db->insert('transaksi', $data);
			$id = $this->db->insert_id();
			return (isset($id)) ? $id : FALSE;
		}
		
		public function tambah_detail_order($data)
		{
			$this->db->insert('trans_detail', $data);
		}
}