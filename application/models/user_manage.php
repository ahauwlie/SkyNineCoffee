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

    	public function upload(){
		    $config['upload_path'] = './assets/images/resource/photo_user/';
		    $config['allowed_types'] = 'jpg|png|jpeg';
		    $config['max_size']  = '2048';
		    $config['remove_space'] = TRUE;
		  
		    $this->load->library('upload', $config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		}

		public function save($upload){
			if($this->session->userdata('login')) {
	        	$id = $this->session->userdata['login']['id_us'];
			    $data = array(
			    	'id_us' => $id,
			    	'img_us' => $upload['file']['file_name'],
			    );
			    // $this->db->update('user', $data);
			    $this->db->update('user', $data, array('id_us' => $id));
			}
		}
}