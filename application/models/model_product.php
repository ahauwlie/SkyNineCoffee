<?php

class Model_product extends CI_Model {
	
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
				$query = $this->db->query('SELECT DISTINCT nama_pr FROM product');
				return $query->result();
		}
		
}