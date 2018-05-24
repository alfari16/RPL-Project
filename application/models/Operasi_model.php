<?php
class Operasi_model extends CI_Model{


	public function addTransaksi($data)
	{
		return $this->db->insert('transaksi', $data);
	}
	
    
}