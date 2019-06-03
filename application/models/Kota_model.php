<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$query=$this->db->get('kota');
		return $query->result();
	}

		//show data detail
	public function detail($id_kota)
	{
		$query=$this->db->get_where('kota',array('id_kota'=>$id_kota));
		return $query->row();
    }

	//tambah data
	public function add($data)
	{
		$this->db->insert('kota', $data);
	}

	//edit data
	public function update($data)
	{
		$this->db->where('id_kota', $data['id_kota']);
		$this->db->update('kota', $data);
	}

	//delete data
	public function delete($data)
	{
		$this->db->where('id_kota', $data['id_kota']);
		$this->db->delete('kota', $data);
	}

}

/* End of file Pengelola_model.php */
/* Location: ./application/models/Pengelola_model.php */