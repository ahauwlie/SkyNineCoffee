<?php

class Model_product extends CI_Model {
	
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
			$query = $this->db->query('SELECT DISTINCT tag_pr FROM product');
			return $query->result();
		}

		public function showme($tipe_pr)
		{ 
			$query = $this->db->get_where('product', array('tipe_pr' => $tipe_pr));
			return $query->result();
		}

		public function showme1($tag_pr)
		{ 
			$query = $this->db->get_where('product', array('tag_pr' => $tag_pr));
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM product");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('product');
    	}

    	public function fetch_countries($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('product');

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

	    public function minprice(){
			$this->db->order_by('harga_pr','asc');
			return $this->db->get('product');
    	}

    	public function maxprice(){
			$this->db->order_by('harga_pr','desc');
			return $this->db->get('product');
    	}
		
}