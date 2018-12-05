<?php

class Penjualan_manage extends CI_Model {
	public function getAll()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function delete($id)
    {
        $this->db->delete('transaksi', array('id_tr' => $id));
    }

    public function getSpecified_detail($id)
    {
        $query = $this->db->query("SELECT * FROM trans_detail WHERE id_tr = $id");
	    return $query->result_array();
    }

    public function update($data, $id)
    {
        $this->db->update('transaksi', $data, array('id_tr' => $id));
    }	

    public function countRow(){
        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM transaksi");
     	return $query->result();
	}
}