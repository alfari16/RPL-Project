<?php
class Logs extends CI_Model{


	public function addLog($data)
	{
		return $this->db->insert('log', $data);
	}
	
	public function getLog()
	{
		$this->db->order_by('tanggal DESC');
		$query = $this->db->get('log');
		return $query->result();
	}

    
}