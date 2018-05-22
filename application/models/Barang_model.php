<?php 


Class Barang_model extends CI_Model
{


	public $nama_table = 'barang';
	public $id = 'kode_barang';
	public $order = 'ASC';

	function ambil_data()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function tambah($data){
		return $this->db->insert($this->nama_table,$data); 
	}
	function cek_kode_barang($data){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where("kode_barang = '$data'");
		return $this->db->get()->row();
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id); 
		return $this->db->delete($this->nama_table);
	}
	
	function edit_data($data){
		$id = $data['kode_barang'];
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);
	}
}